
// function viewsActive(url){
//     $.ajax({
//         url: url,
//         method: 'get',
//         success: function(data){
//             $('#layoutSidenav_content').html(data);
            
            
//         }
        
//     })
// }
// $('.nav-link').on('click', function(e){
//     e.preventDefault();
//     $('.nav-link').removeClass('active');
//     $(this).addClass('active');

//     const home =  $(this).data('home');
//     const about = $(this).data('about');

//     if(home){
//         viewsActive(home);

//     }else if(about){
//         viewsActive(about);
//     }
    
   
// })
// const currentLocation = window.location.pathname;
// const menuItem = document.querySelectorAll('.nav-link');
// const menuLength = document.querySelectorAll('.active') ;
// for(let i = 0; i < menuItem.length; i++){
//     if(menuItem[i] === currentLocation){
//         menuLength[0].className = menuLength[0].className.replace('active', '');
//         menuItem[i].className += 'active';
//     }
// }

// const activePage = window.location.pathname;
// const navlinks = document.querySelectorAll('.nav-link').
// forEach(link => {
//     if(link.href.includes(`$(activePage)`)){
//         let link = link.classList.add('active');
//         navlinks.className += 'active';
//     }
// });
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('.nav-link').forEach(link => {
  if(link.href.includes(activePage)){
    link.classList.add('active');
  }
})