document.addEventListener('DOMContentLoaded', () => {
  const getTheme = sessionStorage.getItem('theme');
  if(getTheme === 'dark') document.querySelector('html').classList.add('dark')
  else document.querySelector('html').classList.remove('dark');


  const sideToggleButton = document.querySelector("#navbar-toggle");
  const userMenuNavPill = document.querySelector("#user-menu-nav-pill");
  const userMenuButton = document.querySelector("#user-menu-button");
  const toggleDarkMode = document.querySelector("#darkmode_toggle");

  const contentWrapper = document.querySelector("#content-wrapper");
  const sidebar = document.querySelector("#sidebar-menu");
  const navbar = document.querySelector("#navbar");
  const profileDropDown = document.querySelector("#profile_drop_down");


  sideToggleButton.addEventListener('click', () => {
    if (contentWrapper.classList.contains('ms-64') && contentWrapper.classList.contains('-me-64')) {
      // no sidebar
      contentWrapper.classList.remove('ms-64', '-me-64', 'md:ms-0', 'md:me-0');
      contentWrapper.classList.add('ms-0', 'me-0', 'md:ms-64');
      
      sidebar.classList.add('-ms-64', 'md:ms-0');
      sidebar.classList.remove('md:-ms-64');

      navbar.classList.remove('start-64', '-end-64', 'md:start-0', 'md:end-0');
      navbar.classList.add('start-0', 'end-0', 'md:start-64');
      
    } else {
      contentWrapper.classList.remove('ms-0', 'me-0', 'md:ms-64');
      contentWrapper.classList.add('ms-64', '-me-64', 'md:ms-0', 'md:me-0');

      sidebar.classList.add('md:-ms-64')
      sidebar.classList.remove('-ms-64', 'md:ms-0');

      navbar.classList.remove('start-0', 'end-0', 'md:start-64');
      navbar.classList.add('start-64', '-end-64', 'md:start-0', 'md:end-0');
    }
  });

  if(userMenuNavPill){
    userMenuButton.addEventListener('click', () => {
      profileDropDown.classList.toggle('hidden');
    });
  }
  
  toggleDarkMode.addEventListener('click', () => {
    const htmlElementy = document.querySelector('html');
    htmlElementy.classList.toggle('dark');

    let theme = htmlElementy.classList.length > 0 && htmlElementy.classList.contains('dark') ? 'dark' : 'light';
    sessionStorage.setItem('theme', theme);

  });

});