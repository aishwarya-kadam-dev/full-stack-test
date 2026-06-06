$(document).ready(function () {
    $('.tab-card').click(function(){

        $('.tab-card').removeClass('active-tab');
        $('.mobile-toggle-icon').attr(
        'src',
        'assets/images/plus-01.svg');
        $(this).addClass('active-tab');
        $(this).find('.mobile-toggle-icon').attr(
            'src',
            'assets/images/minus-01.svg'
        );

        let category_id =
            $(this).data('category');

        $.ajax({

            url:'ajax/get_slides.php',

            type:'POST',

            data:{
                category_id:category_id
            },

            dataType:'json',

            success:function(response){
                currentSlides = response;
                currentIndex = 0;

                renderSlide(currentIndex);
                buildDots();

            }

        });

    });

    $('#nextSlide').click(function(){

        if(currentIndex < currentSlides.length - 1){
            currentIndex++;
        }else{
            currentIndex = 0;
        }

        renderSlide(currentIndex);

    });

    $('#prevSlide').click(function(){

        if(currentIndex > 0){
            currentIndex--;
        }else{
            currentIndex =
                currentSlides.length - 1;
        }

        renderSlide(currentIndex);

    });

    $(document).on('click','.dot',function(){

        currentIndex =
        $(this).data('index');

        renderSlide(currentIndex);

        $('.dot').removeClass('active');

        $(this).addClass('active');

    });

    $('.mobile-tab').click(function(){
        let icon = $(this).find('.accordion-icon');

        if(icon.hasClass('opened')){

            icon.attr(
                'src',
                'assets/images/plus-01.svg'
            );

            icon.removeClass('opened');

        }else{

            icon.attr(
                'src',
                'assets/images/minus-01.svg'
            );

            icon.addClass('opened');
        }

    });

    $('.tab-card:first').trigger('click');
});


let currentSlides = [];
let currentIndex = 0;

function renderSlide(index){

    $('.dot').removeClass('active');
    $('.dot').eq(index).addClass('active');

    let slide = currentSlides[index];

    $('.tag').text(slide.tag_line);

    $('.content-panel h2').text(
        slide.title
    );

    $('.learn-more').attr(
        'href',
        slide.learn_more_link
    );

    $('.image-panel img').attr(
        'src',
        'assets/images/' + slide.image
    );
}
function buildDots(){

    let html='';

    for(let i=0;i<currentSlides.length;i++){

        html += `
        <span class="dot ${i==0?'active':''}"
              data-index="${i}">
        </span>`;
    }

    $('.slider-dots').html(html);
}