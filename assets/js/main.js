
document.addEventListener("DOMContentLoaded", () =>{
    const php_file = '.php';
    const uri = window.document.URL;
    // Related to topnav and main Naigation
    const toggler = document.querySelector('#toggler');
    const nav_collapse = document.querySelector('#navcollapser');
    // show and hide main nav on mobile
    function toggleNav(){
        nav_collapse.hidden = true;
        nav_collapse.classList.remove('show');
        toggler.classList.remove('x');
        toggler.addEventListener('click', (e)=> {
            const thisEl = e.target;
            toggler.classList.toggle('x');
            nav_collapse.classList.toggle('show');
            if(sidebar.classList.contains('show') && theplus.classList.contains('fa-minus')){
                theplus.classList.remove('fa-minus');
                sidebar.classList.remove('show');
            }
        });
    };toggleNav();

    // Load page content without refresh
    let myLink = document.getElementsByClassName('nav-link');
    // Loading pages without refreshing
    const loadPageContent = () =>{
        let = Array.from(myLink).forEach((e, i) => {
            e.addEventListener('click', (d)=>{
                let thisLink = d.target;
                let atr = thisLink.getAttribute("link-to");
                if(atr){ 
                    sessionStorage.setItem('page', atr);
                    if (typeof atr == "string" && atr.length){
                        thisLink.preventDefault;
                    }
                }
                thisLink.preventDefault;
                return false;
            });
        });
        
    };loadPageContent();

    // Related to the side bar
    const sidebar = document.querySelector('#sidebar');
    const theplus = document.querySelector('#cat-plus-icon');
    const sidebar_toggler = document.querySelector('#sidebar-toggler'); //Sidebar toggler btn
    // Show and Hide the sideBar
    const showHideSideBab = ()=>{
        // show hide side-bar
        sidebar.classList.remove('show');
        sidebar_toggler.addEventListener('click',(e)=> {
            e.target.preventDefault;
            theplus.classList.toggle('fa-plus');
            theplus.classList.toggle('fa-minus');
            sidebar.classList.toggle('show');
            if(nav_collapse.classList.contains('show') && toggler.classList.contains('x')){
                nav_collapse.classList.remove('show');
                toggler.classList.remove('x');
            }
        }, false);
    };showHideSideBab();
    
    // Elements for Select categories and Subcategories
    let category_btn = document.getElementsByClassName('category-btn');// main category btn by class
    let subcategory_btn = document.getElementsByClassName('subcat-btn');// main Subcategory btn by class
    // Selecting Categories and subcategories
    const selectCategoryAndSubcategory =()=>{
        let = Array.from(category_btn).forEach((e, i) => {
            e.addEventListener('click', (c)=>{
                c.target.preventDefault;
                let hash = c.target.getAttribute('href');
                let active_subcat = document.querySelector(hash);
                if (active_subcat.classList.contains('active')) {
                    active_subcat.classList.remove('active');
                    active_subcat.previousElementSibling.classList.remove('active');
                    return false;
                }
                let subcat_list = document.querySelectorAll('.subcat-list.active');
                for (let i = 0; i < subcat_list.length; i++) {
                    let brotherEl = subcat_list[i].previousElementSibling;
                    subcat_list[i].classList.remove('active');
                    brotherEl.classList.remove('active');
                }
                active_subcat.classList.toggle('active');
                active_subcat.previousElementSibling.classList.toggle('active');
            }, false)
        });
    }; selectCategoryAndSubcategory();


    // woring Registration and login form tabs ------------------
    // Selecting the tab buttons
    let reg_tabs_links = document.getElementsByClassName('reg');
    
    const toggleTabs = () =>{
        // For login/registration/Reset password tabs
        let = Array.from(reg_tabs_links).forEach((e, i) => {
            e.addEventListener('click', (d)=>{
                let logregTab = d.target;
                if (logregTab .nodeName !== "BUTTON" && !logregTab.classList.contains('reg')) return;
                let targetTab = logregTab.getAttribute("link-to");
                let myTab  = document.querySelector(targetTab);
                console.log(myTab);
                if(myTab.classList.contains('show')){
                    myTab.classList.remove('show');
                    return;
                }
                let active_tab_list = document.querySelectorAll('.details_tabs.show');
                for (let i = 0; i < active_tab_list.length; i++) {
                    active_tab_list[i].classList.remove('show');
                }
                myTab.classList.toggle('show');
            }, false);
        });
    };toggleTabs();


    // Working with tabs-----------------------
    // single Products page tabs
    const tabs = document.querySelectorAll('[role="tab"]'); // the button to activate a tab Panel
    const tabList = document.querySelector('[role="tablist"]'); // the wrapper of tab buttons

    // Add a click event handler to each tab
    tabs.forEach(tab => {
        tab.addEventListener('click', changeTabs);
    })
    let tabFocus = 0;

    tabList.addEventListener('keydown', e => {
        // Move right
        if (e.keyCode === 39 || e.keyCode === 37) {
            tabs[tabFocus].setAttribute('tabindex', -1);
            if (e.keyCode === 39) {
                tabFocus++;
                // If we're at the end, go to the start
                if (tabFocus >= tabs.length) {
                tabFocus = 0;
                }
                // Move left
            } else if (e.keyCode === 37) {
                tabFocus--;
                // If we're at the start, move to the end
                if (tabFocus < 0) {
                tabFocus = tabs.length - 1;
                }
            }
            tabs[tabFocus].setAttribute('tabindex', 0);
            tabs[tabFocus].focus();
        }
    });
    
    function changeTabs(e) {
      const target = e.target;
      const parent = target.parentNode;
      const grandparent = parent.parentNode;
    
      // Remove all current selected tabs
      parent
        .querySelectorAll('[aria-selected="true"]')
        .forEach(t => t.setAttribute('aria-selected', false));
    
      // Set this tab as selected
      target.setAttribute('aria-selected', true);
    
      // Hide all tab panels
      grandparent
        .querySelectorAll('[role="tabpanel"]')
        .forEach(p => p.setAttribute('hidden', true));
    
      // Show the selected panel
      grandparent.parentNode
        .querySelector(`#${target.getAttribute('aria-controls')}`)
        .removeAttribute('hidden');
    }; 
});
