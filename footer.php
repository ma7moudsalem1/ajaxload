<footer class="text-center">
    <h3>Copywrite &copy made by mahmoud</h3>
</footer>
<script src="<?=  JS . 'jquery-1.12.3.js' ?>" ></script>
        <script src="<?= JS . 'bootstrap.min.js' ?>" ></script>
        <script src="<?=  JS . 'script.js' ?>" ></script>
        <script type="text/javascript">
        function change_active () {
        	var actID = $("#act").val();
        	$.post('handle_ajax.php', { act: actID }, function(data){
        		$("#sel_sub").html(data);
        	});
        }
        function load_ajax(offset, limit){
             $.ajax({

                type: "GET",
                url: "load_ajax.php",
                data: {
                    'offset': offset,
                    'limit': limit
                },
                beforeSend: function(){
                    $("#loading").css("display", "block");
                },

                success: function(data){
                    $(".set_data").append(data);
                },
                complete: function(){
                    $("#loading").css("display", "none");
                },
            });
        }
        $(document).ready(function(){
            load_ajax(0, 3);

            $(window).scroll(function(){
                if($(window).scrollTop() + $(window).height() > $(document).height() - 1){
                   var id = $(".lastId:last").attr("data-id");
                    load_ajax(id, 3);
                }
            });

        });
        </script>


    </body>
</html>