    <footer>
      <div class="container mx-auto px-8 pb-20">
        <div class="w-full flex flex-col md:flex-row mt-10 mb-20 text-center md:text-left">
            <div class="flex-1 mx-auto md:mr-20 mb-8">
                <a href="/">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <img src="{{ asset('assets/images/logo-horizontal.png') }}" width="253" height="75" alt="CARDINGO">
                </a>
            </div>
            <div class="flex-1 mb-10">
                <p class="uppercase text-xl mt-5 mb-6 font-goldplayBold">Token</p>
                <ul>
                    <li><a>(Coming Soon)</a></li>
                </ul>
            </div>
            <div class="flex-1 mb-10">
                <p class="uppercase text-xl mt-5 mb-6 font-goldplayBold">NFTs</p>
                <ul>
                    <li><a href="#">New</a></li>
                    <li><a href="#">Rarity</a></li>
                    <li><a href="#">Pixel Art</a></li>
                    <li><a href="#">Illustrations</a></li>
                    <li><a href="#">Collectibles</a></li>
                </ul>
            </div>
            <div class="flex-1 mb-10">
                <p class="uppercase text-xl mt-5 mb-6 font-goldplayBold">Community</p>
                <ul>
                    <!--<li><a href="#">Contact Form</a></li>-->
                    <li><a href="https://t.me/joinchat/YNmt7ziQxkkxYmU9" target="_blank">Telegram</a></li>
                    <li><a href="https://twitter.com/cardingo_io" target="_blank">Twitter</a></li>
                    <li><a href="https://discord.gg/envpS3VT" target="_blank">Discord</a></li>
                    <li><a href="#">Medium</a></li>
                    <li><a href="#">Reddit</a></li>
                    <li><a href="#">Github</a></li>
                </ul>
            </div>
            <div class="flex-1 mb-10">
                <p class="uppercase text-xl mt-5 mb-6 font-goldplayBold">Company</p>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="/privacy">Privacy</a></li>
                </ul>
            </div>
          
        </div>
      </div>
    </footer>

    <!-- Header bg on scroll -->
    <script>
        const navbar = document.querySelector('header');
        window.onscroll = () => {
            if (window.scrollY > 40) {
                navbar.classList.add('bg-senary');
                navbar.classList.add('shadow-lg');
            } else {
                navbar.classList.remove('bg-senary');
                navbar.classList.remove('shadow-lg');
            }
        };
     
    </script>

    <!-- Nav JS -->
    <script src="{{ asset('assets/js/navscript.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      
            $(function() {
// items to show
var increment = 5;
var startFilter = 0;
var endFilter = increment;
// item selector
var $this = $('.items');
var elementLength = $this.find('.item').length;
$('.listLength').text(elementLength);
// show/hide the Load More button
if (elementLength > 2) {
  $('.buttonToogle').show();
}
$('.items .item').slice(startFilter, endFilter).addClass('shown');
$('.shownLength').text(endFilter);
$('.items .item').not('.shown').hide();
$('.buttonToogle .showMore').on('click', function() {
    console.log('clicked');
  if (elementLength > endFilter) {
    startFilter += increment;
    endFilter += increment;
    $('.items .item').slice(startFilter, endFilter).not('.shown').addClass('shown').toggle(500);
    $('.shownLength').text((endFilter > elementLength) ? elementLength : endFilter);
    if (elementLength <= endFilter) {
        $(this).remove();
    }
  }
});
});
        // $('.some-list-4').simpleLoadMore({
        // item: 'div',
        // count: 3,
        // itemsToLoad: 3
        // });
   </script>
   <!-- SELECT DROPDOWN -->
   <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /* Look for any elements with the class "custom-select": */
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /* For each element, create a new DIV that will act as the selected item: */
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* For each element, create a new DIV that will contain the option list: */
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /* For each option in the original select element,
            create a new DIV that will act as an option item: */
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /* When an item is clicked, update the original select box,
                and the selected item: */
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    yl = y.length;
                    for (k = 0; k < yl; k++) {
                    y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /* When the select box is clicked, close any other select boxes,
            and open/close the current select box: */
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
        }

        function closeAllSelect(elmnt) {
        /* A function that will close all select boxes in the document,
        except the current select box: */
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
            arrNo.push(i)
            } else {
            y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
            }
        }
        }

        /* If the user clicks anywhere outside the select box,
        then close all select boxes: */
        document.addEventListener("click", closeAllSelect);
    </script>
    <script>
        $( document ).ready( function() {
                $("#id").keyup( function(e) {
                    e.preventDefault();
                    var id = this.value;
                    if(id!=''){
                        /***sending ajax request***/
                        var params={
                            '_token': $('meta[name="csrf-token"]').attr('content'),
                            'id':id
                        }
                        $.ajax({
                            type:"POST",
                            url:"check_id",
                            data: params,
                            success: function(results){
                                if(results.status=='200'){
                                    $('#error_id').show();
                                    $("#id").val('');
                                }else if(results.status=='100'){
                                    $('#error_id').hide();
                                }
                        },
                        error: function(results) {
                            console.log(results);
                        }
                    });
                        /***End***/ 
                    }
                    
                
            });
            $("#name").keyup( function(e) {
                e.preventDefault();
                    var name = this.value;
                    if(name!=''){
              /***sending ajax request***/
                             var params={
                                    '_token': $('meta[name="csrf-token"]').attr('content'),
                                    'name':name
                                }
                                $.ajax({
                                    type:"POST",
                                    url:"check_name",
                                    data: params,
                                    success: function(results){
                                        if(results.status=='200'){
                                            $('#error_name').show();
                                            $("#name").val('');
                                        }else if(results.status=='100'){
                                            $('#error_name').hide();
                                        }
                                },
                                error: function(results) {
                                    console.log(results);
                                }
                            });
                                /***End***/ 
                    }
              
                
            });
        });
    </script>
