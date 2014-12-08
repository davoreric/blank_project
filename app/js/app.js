/* namespace sanatization */
var app = app || {};

/**********************************
* JS TINY GENERAL COMPONENTS ******
***********************************/

app.component = app.component || {};


/* temp for bookables */
app.component.example = {

    init: function(){

        this.setup();

    },

    setup: function(){

    }

};


/**********************************
* JS init on load *****************
***********************************/

app.init = (function(){

    //plugins init
    
    //components init
	app.component.example.init();

})();