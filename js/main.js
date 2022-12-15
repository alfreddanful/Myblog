const navitems = document.querySelector('.nav__items');
const OpenNavBtn = document.querySelector('#open__nav-btn');
const CloseNavBtn = document.querySelector('#close__nav-btn');

//This Opens nav dropdown

const openNav = () => {
    navitems.style.display = 'flex';
    OpenNavBtn.style.display = 'none';
    CloseNavBtn.style.display = 'inline-block';
}
//This closes nav dropdown

const closeNav = () => {
    navitems.style.display = 'none';
    OpenNavBtn.style.display = 'inline-block';
    CloseNavBtn.style.display = 'none';
}

OpenNavBtn.addEventListener('click', openNav);
CloseNavBtn.addEventListener('click', closeNav);




const sidebar = document.querySelector('aside');
const showSidebarBtn = document.querySelector('#show__sidebar-btn');
const hideSidebarBtn  = document.querySelector('#hide__sidebar-btn');

//Show sidebar on small deivices
const showSidebar = () => {
      sidebar.style.left = '0';
      showSidebarBtn.style.display = 'none';
      hideSidebarBtn.style.display = 'inline-block';
}

showSidebarBtn.addEventListener('click', showSidebar);
showSidebarBtn.addEventListener('click', showSidebar);


//Show sidebar on small deivices
const hideSidebar = () => {
      sidebar.style.left = '-100%';
      showSidebarBtn.style.display = 'inline-block';
      hideSidebarBtn.style.display = 'none';
}

showSidebarBtn.addEventListener('click', hideSidebar);
showSidebarBtn.addEventListener('click', hideSidebar);