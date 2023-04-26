function showDialog(text) {
   const backgroundDiv = document.createElement("div"); 
   backgroundDiv.className = "dialog-background";
   document.getElementsByTagName("body")[0].append(backgroundDiv);

   const dialogDiv = document.createElement("div");
   dialogDiv.className = "dialog";
   backgroundDiv.append(dialogDiv);

   const textDiv = document.createElement("h3");
   textDiv.append(document.createTextNode(text));
   dialogDiv.append(textDiv);

   const okButton = document.createElement("button");
   okButton.append(document.createTextNode("Ok"));
   okButton.addEventListener("click", (clickEvent) => backgroundDiv.parentNode.removeChild(backgroundDiv));
   dialogDiv.append(okButton);

   return backgroundDiv;
}
