/* Site Content screen: repeater add/remove/reorder and Media Library image picker. */
(function () {
  'use strict';

  var counter = 0;

  function directChild(parent, selector) {
    for (var i = 0; i < parent.children.length; i++) {
      if (parent.children[i].matches(selector)) return parent.children[i];
    }
    return null;
  }

  document.addEventListener('click', function (e) {
    var add = e.target.closest('[data-cc-add]');
    if (add) {
      var list = add.closest('.cc-list');
      var template = directChild(list, 'template');
      // Each new row gets a unique index; nested templates carry their own tokens and stay intact.
      var index = 'n' + Date.now() + '_' + (counter++);
      directChild(list, '.cc-items').insertAdjacentHTML('beforeend', template.innerHTML.split(template.getAttribute('data-token')).join(index));
      return;
    }

    var item = e.target.closest('.cc-item');
    if (e.target.closest('[data-cc-remove]')) { item.remove(); return; }
    if (e.target.closest('[data-cc-up]') && item.previousElementSibling) { item.parentNode.insertBefore(item, item.previousElementSibling); return; }
    if (e.target.closest('[data-cc-down]') && item.nextElementSibling) { item.parentNode.insertBefore(item.nextElementSibling, item); return; }

    var pick = e.target.closest('[data-cc-media]');
    if (pick && window.wp && wp.media) {
      var wrap = pick.closest('.cc-image');
      var frame = wp.media({ title: 'Choose image', button: { text: 'Use this image' }, library: { type: 'image' }, multiple: false });
      frame.on('select', function () {
        var attachment = frame.state().get('selection').first().toJSON();
        wrap.querySelector('input').value = attachment.url;
        var preview = wrap.querySelector('.cc-preview');
        preview.src = attachment.url;
        preview.hidden = false;
      });
      frame.open();
    }
  });
})();
