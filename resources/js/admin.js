import "../../node_modules/ContentTools/build/content-tools";

window.addEventListener("load", function() {
    var editor;

    editor = ContentTools.EditorApp.get();
    editor.init("*[data-editable]", "data-name");
});
