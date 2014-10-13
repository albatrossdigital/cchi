CKEDITOR.plugins.add( 'widgetcommon', {
    requires: 'widget',

    icons: 'widgetcommonQuotebox,widgetcommonBox',

    defaults : {
        name: 'accordion',
        count: 3,
        activePanel: 1,
        multiExpand: false
    },

    init: function( editor ) {
        
        // Configurable settings
        var allowedFull = editor.config.widgetFoundation_allowedFull != undefined ? editor.config.widgetFoundation_allowedFull :
            'div(!row,two-col-left,two-col-right,accordion,two-col,three-col){width};' +
            'div(!columns,small-12,medium-3,medium-9,col-sidebar,col-main,col-1,col-2,col-3)';
        var allowedWidget = editor.config.widgetFoundation_allowedWidget != undefined ? editor.config.widgetFoundation_allowedFull :
            'p br ul ol li a strong em img[!src,alt,width,height]';
        var allowedText = editor.config.widgetFoundation_allowedText != undefined ? editor.config.widgetFoundation_allowedFull :
            'p br ul ol li strong em';


        //allowedWidget = 'img[!src,alt,width,height]';
        //allowedText = allowedWidget;

        var showButtons = editor.config.widgetcommonShowButtons != undefined ? editor.config.widgetcommonShowButtons : true;

        // Define the widgets
        editor.widgets.add( 'widgetcommonQuotebox', {

            button: showButtons ? 'Add Quotebox' : undefined,

            template:
                '<div class="row quotebox">' +
                    '<div class="row quote"><img src="http://placehold.it/300x250&text=Medium" /></div>' +
                    '<div class="row byline">Person</div>' +
                '</div>',

            editables: {
                quote: {
                    selector: '.quote',
                    allowedContent: allowedFull
                },
                byline: {
                    selector: '.byline',
                    allowedContent: allowedText
                }
            },

            allowedContent: allowedFull,

            upcast: function( element ) {
                return element.name == 'div' && element.hasClass( 'quotebox' );
            }
            
        } );

        editor.widgets.add( 'widgetcommonBox', {

            button: showButtons ? 'Add box' : undefined,

            template:
                '<div class="row box">' +
                    '<div class="row box-title"><h2>Title</h2></div>' +
                    '<div class="row box-content"><ul><li>Content</li></ul></div>' +
                '</div>',

            editables: {
                title: {
                    selector: '.box-title',
                    allowedContent: allowedText
                },
                content: {
                    selector: '.box-content',
                    allowedContent: allowedWidget
                }
            },

            allowedContent: allowedFull,

            upcast: function( element ) {
                return element.name == 'div' && element.hasClass( 'two-col-right' );
            }

        } );


        // Append the widget's styles when in the CKEditor edit page,
        // added for better user experience.
        // Assign or append the widget's styles depending on the existing setup.
        if (typeof editor.config.contentsCss == 'object') {
            editor.config.contentsCss.push(CKEDITOR.getUrl(this.path + 'contents.css'));
        }

        else {
            editor.config.contentsCss = [editor.config.contentsCss, CKEDITOR.getUrl(this.path + 'contents.css')];
        }
    }


} );