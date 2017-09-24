



		
			
						var editor = new MediumEditor('.editable', {
				
				placeholder: true, 
				
				autoLink: true, 
    toolbar: {
        /* These are the default options for the toolbar,
           if nothing is passed this is what is used */
        allowMultiParagraphSelection: true,
        buttons: ['bold', 'italic', 'anchor', 'h2', 'h3', 'orderedlist', 'unorderedlist', 'strikethrough', 'quote', 'underline', ],
        diffLeft: 0,
        diffTop: -10,
        firstButtonClass: 'medium-editor-button-first',
        lastButtonClass: 'medium-editor-button-last',
        relativeContainer: null,
        standardizeSelectionStart: false,
        static: false,
        /* options which only apply when static is true */
        align: 'center',
        sticky: false,
        updateOnEmptySelection: false
    },
	
	extensions: {
        // compact
        'pop': new MediumButton({
          label:'POP',
          action: function(html, mark, parent){
                    alert('hello :)')
                    return html
                  }
        }),
		
		'b':  new MediumButton({label:'BOLD', start:'<code>', end:'</code>'}),
       
	}	
});
						


						 
       $(function () {
           $('.editable').mediumInsert({
       
    

                editor: editor,
                addons: {
                    images: {
                        uploadScript: null,
                        deleteScript: null,
                        captionPlaceholder: 'Type caption for image',
                        styles: {
                            slideshow: {
                                label: '<span class="fa fa-play"></span>',
                                added: function ($el) {
                                    $el
                                        .data('cycle-center-vert', true)
                                        .cycle({
                                            slides: 'figure'
                                        });
                                },
                                removed: function ($el) {
                                    $el.cycle('destroy');
                                }
                            }
                        },
                        actions: null
                    }
                }
            })
        } 
          ); 


        /*  $(function () {
    $('.editable').mediumInsert({
        editor: editor
    });
}); */ 
		
		
	

 
