
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	

	<script type="text/javascript" charset="utf-8">
		$('input').click(function(){
			$(this).select();	
		});
                $('.111').click(function(){
                    $.ajax({
                        
                        type:'POST',
                        url:'abc.php',
                        data:{name:'ABC',full:'abc'}

                    }).done(function( html ) {
                        $( "#results" ).append( html );
                      });

                });
        
    

</script>

</body>
</html>