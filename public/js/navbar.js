function createNavbar() {
    // Create the navbar element
    var navbar = document.createElement("div");
    navbar.className = "navbar";
  
    // Create the icon element
    var icon = document.createElement("div");
    icon.className = "icon";
  
    // Create the logo element
    var logo = document.createElement("h2");
    logo.className = "logo";
    logo.textContent = "Butterfly";
  
    // Append the logo to the icon element
    icon.appendChild(logo);
  
    // Create the menu element
    var menu = document.createElement("div");
    menu.className = "menu";
  
    // Create the ul element
    var ul = document.createElement("ul");
  
    // Create an array of menu items
    var menuItems = ["HOME", "SERVICES", "BOOKING", "ABOUT", "CONTACT"];
  
    // Create list items and anchor elements for each menu item
    menuItems.forEach(function(item) {
      var li = document.createElement("li");
      var a = document.createElement("a");
      a.href = "{{url('/" + item.toLowerCase() + "')}}";
      a.textContent = item;
      li.appendChild(a);
      ul.appendChild(li);
    });
  
    // Append the ul to the menu element
    menu.appendChild(ul);
  
    // Append the icon and menu elements to the navbar
    navbar.appendChild(icon);
    navbar.appendChild(menu);
  
    // Append the navbar to the body or any other parent element
    document.body.appendChild(navbar);
  }
  
  // Call the function to create the navbar
  createNavbar();
  