/* namespace sanatization */
var app = app || {};
app.lib = app.lib || {};

/***********************************
* HELPER FOR MEDIA QUERIES *********
***********************************/

app.lib.setMediaQuery = function(mediaQuery,callbackTrue,callbackFalse,onload){

    if(mediaQuery){

        var mql = window.matchMedia(mediaQuery);

        mql.addListener(function(mq){
            
            if(mq.matches) {
                
                if(callbackTrue) callbackTrue();

            } else {

                if(callbackFalse) callbackFalse();

            }

        });

        if(onload){

            if (mql.matches) {
            
                if(callbackTrue) callbackTrue();

            } else {

                if(callbackFalse) callbackFalse();

            }

        }

    } else {

        return null;
    }

};