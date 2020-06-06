console.log('ok');
console.log($);

$(document).ready(function () {
    
    const activeLink = $('.active-link');
    const computers = $('#computers');
    const software = $('#software');
    
    
    activeLink.click( function () {

        
        if($(this).hasClass('computer')) {

            if(!computers.hasClass('active')) {

                computers.addClass('active');
                software.removeClass('active');
                
                computers.toggle();
                software.toggle()
            }
            

        } else if ($(this).hasClass('software')) {
            
            if(!software.hasClass('active')) {

                computers.removeClass('active');
                software.addClass('active');
                software.toggle();
                computers.toggle()
            }
        
        }
    });

});

