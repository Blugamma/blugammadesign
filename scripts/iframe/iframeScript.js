$(document).ready(
    function() {
        $("#indePortNameiframe").click(function() {
            $("#indeiframeOverlay").show("fast");
            $("#indeIframe").show("fast");
            $(".closeiframe").show("fast");
            $(".overlay").show("fast");            
        });
        
        $("#harveyPortNameiframe").click(function() {
            $("#harveyiframeOverlay").show("fast");
            $(".closeiframe").show("fast");
            $(".overlay").show("fast");            
        });
        
        $('.closeiframe, .overlay').click(function(){
            $("#indeiframeOverlay").hide();
            $("#harveyiframeOverlay").hide();
            $(".closeiframe").hide();
            $(".overlay").hide();
        });
});
