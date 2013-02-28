/*

==== Dragon Drop: a demo of precise DnD
          in, around, and between 
       multiple contenteditable's.

==== Copyright 2013 Chase Moskal
  this document is free to learn from.
  http://jsfiddle.net/ChaseMoskal/T2zHQ/
*/
$(document).ready(function() {
function DRAGON_DROP (o) {
  var DD=this;
  
  // "o" params:
  DD.$draggables=null;
  DD.$dropzones=null;
  DD.$noDrags=null; // optional
    
  DD.dropLoad=null;
  DD.engage=function(o){
    DD.$draggables = $(o.draggables);
    DD.$dropzones = $(o.dropzones);
    DD.$draggables.attr('draggable','true');
    DD.$noDrags = (o.noDrags) ? $(o.noDrags) : $();
    DD.$dropzones.attr('dropzone','copy');
    DD.bindDraggables();
    DD.bindDropzones();
  };
  DD.bindDraggables=function(){
    DD.$draggables = $(DD.$draggables.selector); // reselecting
    DD.$noDrags = $(DD.$noDrags.selector);
    DD.$noDrags.attr('draggable','false');
    DD.$draggables.off('dragstart').on('dragstart',function(event){
      var e=event.originalEvent;
      $(e.target).removeAttr('dragged');
      var dt=e.dataTransfer,
        content=e.target.outerHTML;
      var is_draggable = DD.$draggables.is(e.target);
      if (is_draggable) {
        dt.effectAllowed = 'copy';
        dt.setData('text/plain',' ');
        DD.dropLoad=content;
        $(e.target).attr('dragged','dragged');
      }
    });
  };
  DD.bindDropzones=function(){
    DD.$dropzones = $(DD.$dropzones.selector); // reselecting
    DD.$dropzones.off('dragleave').on('dragleave',function(event){
      var e=event.originalEvent;
      
      var dt=e.dataTransfer;
      var relatedTarget_is_dropzone = DD.$dropzones.is(e.relatedTarget);
      var relatedTarget_within_dropzone = DD.$dropzones.has(e.relatedTarget).length>0;
      var acceptable = relatedTarget_is_dropzone||relatedTarget_within_dropzone;
      if (!acceptable) {
        dt.dropEffect='none';
        dt.effectAllowed='null';
      }
    });
    DD.$dropzones.off('drop').on('drop',function(event){
      var e=event.originalEvent;
      
      if (!DD.dropLoad) return false;
      var range=null;
      if (document.caretRangeFromPoint) { // Chrome
        range=document.caretRangeFromPoint(e.clientX,e.clientY);
      }
      else if (e.rangeParent) { // Firefox
        range=document.createRange(); range.setStart(e.rangeParent,e.rangeOffset);
      }
      var sel = window.getSelection();
      sel.removeAllRanges(); sel.addRange(range);
      
      $(sel.anchorNode).closest(DD.$dropzones.selector).get(0).focus(); // essential
      document.execCommand('insertHTML',false,'<param name="dragonDropMarker" />'+DD.dropLoad);
      sel.removeAllRanges();
      
      // verification with dragonDropMarker
      var $DDM=$('param[name="dragonDropMarker"]');
      var insertSuccess = $DDM.length>0;
      if (insertSuccess) {
        $(DD.$draggables.selector).filter('[dragged]').remove();
        $DDM.remove();
      }
      
      DD.dropLoad=null;
      DD.bindDraggables();
      e.preventDefault();
    });
  };
  DD.disengage=function(){
    DD.$draggables=$( DD.$draggables.selector ); // reselections
    DD.$dropzones=$( DD.$dropzones.selector );
    DD.$noDrags=$( DD.$noDrags.selector );
    DD.$draggables.removeAttr('draggable').removeAttr('dragged').off('dragstart');
    DD.$noDrags.removeAttr('draggable');
    DD.$dropzones.removeAttr('droppable').off('dragenter');
    DD.$dropzones.off('drop');
  };
  if (o) DD.engage(o);
}



$(function(){
  
  window.DragonDrop = new DRAGON_DROP({
    draggables:$('li.imgdrag'),
    dropzones:$('[contenteditable]'),
    noDrags:$('.fancy img')
  });
  
  // This is just the enable/disable contenteditable button at the bottom of the page.
  $('button[name="toggleContentEditable"]').click(function(){
    var button=this;
    $('[contenteditable]').each(function(){
      if ($(this).attr('contenteditable')==='true') {
        $(this).attr('contenteditable','false');
        $(button).html('enable contenteditable');
      } else {
        $(this).attr('contenteditable','true');
        $(button).html('disable contenteditable');
      }
    });
  });
  
});

});