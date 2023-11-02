/*
*  Copyright (C) 1998-2019 by Northwoods Software Corporation. All Rights Reserved.
*/

import * as go from '../release/go';

// HTML + JavaScript text editor using an HTML Select Element and HTMLInfo.
// This file exposes one instance of HTMLInfo, window.TextEditorSelectBox
// see /samples/customTextEditingTool.html
// see also textEditorRadioButton.js for another custom editor
// see also textEditor.html for a re-implementation of the default text editor
((window: any) => {
  const customEditor = new go.HTMLInfo();

  const customSelectBox = document.createElement('select');

  customEditor.show = (textBlock, diagram, tool) => {
    if (!(textBlock instanceof go.TextBlock)) return;

    // Populate the select box:
    customSelectBox.innerHTML = '';

    let list = textBlock.choices;
    // Perhaps give some default choices if textBlock.choices is null
    if (list === null) list = ['Default A', 'Default B', 'Default C'];
    const l = list.length;
    for (let i = 0; i < l; i++) {
      const op = document.createElement('option');
      op.text = list[i];
      op.value = list[i];
      customSelectBox.add(op);

      // consider also adding the current value, if it is not in the choices list
    }

    // After the list is populated, set the value:
    customSelectBox.value = textBlock.text;

    // Do a few different things when a user presses a key
    customSelectBox.addEventListener('keydown', (e) => {
      const keynum = e.which;
      if (keynum === 13) { // Accept on Enter
        (tool as any).acceptText(go.TextEditingTool.Enter);
        return;
      } else if (keynum === 9) { // Accept on Tab
        (tool as any).acceptText(go.TextEditingTool.Tab);
        e.preventDefault();
        return false;
      } else if (keynum === 27) { // Cancel on Esc
        tool.doCancel();
        if (tool.diagram) tool.diagram.focus();
      }
    }, false);

    const loc = textBlock.getDocumentPoint(go.Spot.TopLeft);
    const pos = diagram.transformDocToView(loc);
    customSelectBox.style.left = pos.x + 'px';
    customSelectBox.style.top  = pos.y + 'px';
    customSelectBox.style.position = 'absolute';
    customSelectBox.style.zIndex = (100).toString(); // place it in front of the Diagram

    if (diagram.div !== null) diagram.div.appendChild(customSelectBox);
  };

  customEditor.hide = (diagram, tool) => {
    if (diagram.div !== null) diagram.div.removeChild(customSelectBox);
  };

  customEditor.valueFunction = () => customSelectBox.value;

  window.TextEditorSelectBox = customEditor;
})(window);
