/**
java -jar compiler.jar --js $FileName$ --js_output_file ../inc/kint.js --compilation_level ADVANCED_OPTIMIZATIONS --output_wrapper "(function(){%output%})()"
*/

if ( typeof kintInitialized === 'undefined' ) {
	kintInitialized = 1;
	var kint = {
		visiblePluses : [], // all visible toggle carets
		currentPlus   : -1, // currently selected caret

		selectText : function( element ) {
			var selection = window.getSelection(),
				range = document.createRange();

			range.selectNodeContents(element);
			selection.removeAllRanges();
			selection.addRange(range);
		},

		hasClass : function( target, className ) {
			if ( typeof className === 'undefined' ) {
				className = 'kint-show';
			}

			return new RegExp('(\\s|^)' + className + '(\\s|$)').test(target.className);
		},

		addClass : function( ele, className ) {
			if ( typeof className === 'undefined' ) {
				className = 'kint-show';
			}

			kint.removeClass(ele, className).className += (" " + className);
		},

		removeClass : function( ele, className ) {
			if ( typeof className === 'undefined' ) {
				className = 'kint-show';
			}

			ele.className = ele.className.replace(
				new RegExp('(\\s|^)' + className + '(\\s|$)'), ' '
			);
			return ele;
		},

		next : function( element ) {
			do {
				element = element.nextElementSibling;
			} while ( element.nodeName.toLowerCase() !== 'dd' );

			return element;
		},

		toggle : function( element, hide ) {
			var parent = kint.next(element);

			if ( typeof hide === 'undefined' ) {
				hide = kint.hasClass(element);
			}

			if ( hide ) {
				kint.removeClass(element);
			} else {
				kint.addClass(element);
			}

			if ( parent.childNodes.length === 1 ) {
				parent = parent.childNodes[0].childNodes[0]; // reuse variable cause I can

				if ( kint.hasClass(parent, 'kint-parent') ) {
					kint.toggle(parent, hide)
				}
			}
		},

		toggleChildren : function( element, hide ) {
			var parent = kint.next(element)
				, nodes = parent.getElementsByClassName('kint-parent')
				, i = nodes.length;

			if ( typeof hide === 'undefined' ) {
				hide = kint.hasClass(element);
			}

			while ( i-- ) {
				kint.toggle(nodes[i], hide);
			}
			kint.toggle(element, hide);
		},

		toggleAll : function( caret ) {
			var elements = document.getElementsByClassName('kint-parent'),
				i = elements.length,
				visible = kint.hasClass(caret.parentNode);

			while ( i-- ) {
				kint.toggle(elements[i], visible);
			}
		},

		switchTab : function( target ) {
			var lis, el = target, index = 0;

			target.parentNode.getElementsByClassName('kint-active-tab')[0].className = '';
			target.className = 'kint-active-tab';

			// take the index of clicked title tab and make the same n-th content tab visible
			while ( el = el.previousSibling ) el.nodeType === 1 && index++;
			lis = target.parentNode.nextSibling.childNodes;
			for ( var i = 0; i < lis.length; i++ ) {
				if ( i === index ) {
					lis[i].style.display = 'block';

					if ( lis[i].childNodes.length === 1 ) {
						el = lis[i].childNodes[0].childNodes[0];

						if ( kint.hasClass(el, 'kint-parent') ) {
							kint.toggle(el, false)
						}
					}
				} else {
					lis[i].style.display = 'none';
				}
			}
		},

		isSibling : function( el ) {
			for ( ; ; ) {
				el = el.parentNode;
				if ( !el || kint.hasClass(el, 'kint') ) {
					break;
				}
			}

			return !!el;
		},

		fetchVisiblePluses : function() {
			kint.visiblePluses = [];
			Array.prototype.slice.call(document.querySelectorAll('.kint nav, .kint-tabs>li:not(.kint-active-tab)'), 0)
				.forEach(
				function( el ) {
					if ( el.offsetWidth !== 0 || el.offsetHeight !== 0 ) {
						kint.visiblePluses.push(el)
					}
				}
			);
		},

		keyCallBacks : {
			cleanup : function( i ) {
				var focusedClass = 'kint-focused';
				var prevElement = document.querySelector('.' + focusedClass);
				prevElement && kint.removeClass(prevElement, focusedClass);

				if ( i !== -1 ) {
					var el = kint.visiblePluses[i];
					kint.addClass(el, focusedClass);


					var offsetTop = function( el ) {
						return el.offsetTop + ( el.offsetParent ? offsetTop(el.offsetParent) : 0 );
					};

					var top = offsetTop(el) - (window.innerHeight / 2 );
					window.scrollTo(0, top);
				}

				kint.currentPlus = i;
			},

			moveCursor : function( up, i ) {
				// todo make the first VISIBLE plus active
				if ( up ) {
					if ( --i < 0 ) {
						i = kint.visiblePluses.length - 1;
					}
				} else {
					if ( ++i >= kint.visiblePluses.length ) {
						i = 0;
					}
				}

				kint.keyCallBacks.cleanup(i);
				return false;
			}
		}
	};

	window.addEventListener("click", function( e ) {
		var target = e.target
			, nodeName = target.nodeName.toLowerCase();

		if ( !kint.isSibling(target) ) return;

		// auto-select name of variable
		if ( nodeName === 'dfn' ) {
			kint.selectText(target);
			target = target.parentNode;
		} else if ( nodeName === 'var' ) { // stupid workaround for misc elements
			target = target.parentNode;    // to not stop event from further propagating
			nodeName = target.nodeName.toLowerCase()
		}

		// switch tabs
		if ( nodeName === 'li' && target.parentNode.className === 'kint-tabs' ) {
			if ( target.className !== 'kint-active-tab' ) {
				kint.switchTab(target);
				if ( kint.currentPlus !== -1 ) kint.fetchVisiblePluses();
			}
			return false;
		}

		// handle clicks on the navigation caret
		if ( nodeName === 'nav' ) {
			// ensure doubleclick has different behaviour, see below
			setTimeout(function() {
				var timer = parseInt(target.kintTimer, 10);
				if ( timer > 0 ) {
					target.kintTimer--;
				} else {
					kint.toggleChildren(target.parentNode); // <dt>
					if ( kint.currentPlus !== -1 ) kint.fetchVisiblePluses();
				}
			}, 300);
			e.stopPropagation();
			return false;
		} else if ( kint.hasClass(target, 'kint-parent') ) {
			kint.toggle(target);
			if ( kint.currentPlus !== -1 ) kint.fetchVisiblePluses();
			return false;
		} else if ( kint.hasClass(target, 'kint-ide-link') ) {
			e.preventDefault();
			var ajax = new XMLHttpRequest(); // add ajax call to contact editor but prevent link default action
			ajax.open('GET', target.href);
			ajax.send(null);
			return false;
		}
	}, false);

	window.addEventListener("dblclick", function( e ) {
		var target = e.target;
		if ( !kint.isSibling(target) ) return;


		if ( target.nodeName.toLowerCase() === 'nav' ) {
			target.kintTimer = 2;
			kint.toggleAll(target);
			if ( kint.currentPlus !== -1 ) kint.fetchVisiblePluses();
			e.stopPropagation();
		}
	}, false);

	// keyboard navigation
	window.onkeydown = function( e ) {

		// do nothing if alt key is pressed or if we're actually typing somewhere
		if ( e.target !== document.body || e.altKey ) return;

		var keyCode = e.keyCode
			, shiftKey = e.shiftKey
			, i = kint.currentPlus;


		if ( keyCode === 68 ) { // 'd' : toggles navigation on/off
			if ( i === -1 ) {
				kint.fetchVisiblePluses();
				return kint.keyCallBacks.moveCursor(false, i);
			} else {
				kint.keyCallBacks.cleanup(-1);
				return false;
			}
		} else {
			if ( i === -1 ) return;

			if ( keyCode === 9 ) { // TAB : moves up/down depending on shift key
				return kint.keyCallBacks.moveCursor(shiftKey, i);
			} else if ( keyCode === 38 ) { // ARROW UP : moves up
				return kint.keyCallBacks.moveCursor(true, i);
			} else if ( keyCode === 40 ) { // ARROW DOWN : down
				return kint.keyCallBacks.moveCursor(false, i);
			} else {
				if ( i === -1 ) {
					return;
				}
			}
		}


		var kintNode = kint.visiblePluses[i];
		if ( kintNode.nodeName.toLowerCase() === 'li' ) { // we're on a trace tab
			if ( keyCode === 32 || keyCode === 13 ) { // SPACE/ENTER
				kint.switchTab(kintNode);
				kint.fetchVisiblePluses();
				return kint.keyCallBacks.moveCursor(true, i);
			} else if ( keyCode === 39 ) { // arrows
				return kint.keyCallBacks.moveCursor(false, i);
			} else if ( keyCode === 37 ) {
				return kint.keyCallBacks.moveCursor(true, i);
			}
		}

		kintNode = kintNode.parentNode; // simple dump
		if ( keyCode === 32 || keyCode === 13 ) { // SPACE/ENTER : toggles
			kint.toggle(kintNode);
			kint.fetchVisiblePluses();
			return false;
		} else if ( keyCode === 39 || keyCode === 37 ) { // ARROW LEFT/RIGHT : respectively hides/shows and traverses
			var visible = kint.hasClass(kintNode);
			var hide = keyCode === 37;

			if ( visible ) {
				kint.toggleChildren(kintNode, hide); // expand/collapse all children if immediate ones are showing
			} else {
				if ( hide ) { // LEFT
					// traverse to parent and THEN hide
					do {kintNode = kintNode.parentNode} while ( kintNode && kintNode.nodeName.toLowerCase() !== 'dd' );

					if ( kintNode ) {
						kintNode = kintNode.previousElementSibling;

						i = -1;
						var parentPlus = kintNode.querySelector('nav');
						while ( parentPlus !== kint.visiblePluses[++i] ) {}
						kint.keyCallBacks.cleanup(i)
					} else { // we are at root
						kintNode = kint.visiblePluses[i].parentNode;
					}
				}
				kint.toggle(kintNode, hide);
			}
			kint.fetchVisiblePluses();
			return false;
		}
	};
}

// debug purposes only, removed in minified source
function clg( i ) {
	if ( !window.console )return;
	var l = arguments.length, o = 0;
	while ( o < l )console.log(arguments[o++])
}
