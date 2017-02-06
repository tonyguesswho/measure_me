
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    


    
$("input[name='neck']").focus(function() {
    $("#direct").attr("src","img/neck.png");
        
    });
$("input[name='chest']").focus(function() {
    $("#direct").attr("src","img/chest.png");
        
    });
$("input[name='stomach']").focus(function() {
    $("#direct").attr("src","img/stomach.png");
        
    });
$("input[name='ltnw']").focus(function() {
    $("#direct").attr("src","img/ltnw.png");
        
    });
$("input[name='nw']").focus(function() {
    $("#direct").attr("src","img/nw.png");
        
    });
$("input[name='lts']").focus(function() {
    $("#direct").attr("src","img/lts.png");
        
    });
$("input[name='seat']").focus(function() {
    $("#direct").attr("src","img/seat.png");
        
    });
$("input[name='jl']").focus(function() {
    $("#direct").attr("src","img/jl.png");
        
    });
$("input[name='tw']").focus(function() {
    $("#direct").attr("src","img/tw.png");
        
    });
$("input[name='thigh']").focus(function() {
    $("#direct").attr("src","img/thigh.png");
        
    });
$("input[name='crotch']").focus(function() {
    $("#direct").attr("src","img/crouch.png");
        
    });
$("input[name='sw']").focus(function() {
    $("#direct").attr("src","img/sw.png");
        
    });
$("input[name='sl']").focus(function() {
    $("#direct").attr("src","img/sl.png");
        
    });
$("input[name='bicep']").focus(function() {
    $("#direct").attr("src","img/bicep.png");
        
    });
$("input[name='tl']").focus(function() {
    $("#direct").attr("src","img/tl.png");
        
    });
$("input[name='pc']").focus(function() {
    $("#direct").attr("src","img/pc.png");
        
    });
$("input[name='pb']").focus(function() {
    $("#direct").attr("src","img/pb.png");
        
    });
$("input[name='ltec']").focus(function() {
    $("#direct").attr("src","img/ltec.png");
        
    });
$("input[name='wrist']").focus(function() {
    $("#direct").attr("src","img/wrist.png");
        
    });
$("input[name='calf']").focus(function() {
    $("#direct").attr("src","img/calf.png");
        
    });






    

function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
function myFunction(x) {
    x.classList.toggle("change");
};




