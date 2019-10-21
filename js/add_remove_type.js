// JavaScript to Add and Remove Artisans Type on Sign-up
$(document).ready(function(){
            $("select").change(function(){
                $("select option:selected").each(function(){
                    if($(this).attr("value")=="Select"){
                    $(".box").hide();
                }
                if($(this).attr("value")=="Individual"){
                   $(".box").hide();
                   $(".username").show();
                   $(".username").style.display='block';
                }
                if($(this).attr("value")=="Corporate"){
                      $(".box").hide();
                      $(".company").show();
                   $(".company").style.display='block';
                }
                });
            }).change();
        });