(function() {

    tinymce.PluginManager.add('my_mce_button', function( editor, url ) {

        editor.addButton( 'my_mce_button', {

            text: 'Shortcode',

            icon: false,

            type: 'menubutton',

            menu: [
				
				{
							text:'Layout',
							
							menu: [
							
                        {

                            text: 'Full Width Section ',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Marvela Full Width Section',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'sectionid101',

                                            label: 'Section ID',

                                            value: ''

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'sectionclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },											
                                        
										{

                                            type: 'textbox',

                                            name: 'sectionbgcolor101',

                                            label: 'Background Color Code',

                                            value: '#fff'

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'sectionbgimage101',

                                            label: 'Background Image URL',

                                            value: ''										

                                        }, 

                                        {

                                            type: 'listbox',

                                            name: 'sectionparallax101',

                                            label: 'Background Parallax',

                                            values: [
                                                    { text: 'No', value: 'inherit'},
                                                    { text: 'Yes', value: 'fixed' },                                            
                                                
                                                ]

                                        }, 

                                        {

                                            type: 'listbox',

                                            name: 'sectiongradient101',

                                            label: 'Background Gradient',

                                            values: [
                                                    { text: 'No', value: ''},
                                                    { text: 'Yes', value: 'linear-gradient( rgba(0,0,0,0.4), rgba(0,0,0, 0.6) ),' },                                            
                                                
                                                ]

                                        },										

										{

                                            type: 'textbox',

                                            name: 'sectionmargin101',

                                            label: 'Margin',

                                            value: '0px 0px 0px 0px'

                                        },                                       
 
										{

                                            type: 'textbox',

                                            name: 'sectionpadding101',

                                            label: 'Padding',

                                            value: '0px 0px 0px 0px'

                                        },
 

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_section_box id="' + e.data.sectionid101 + '" class="' + e.data.sectionclass101 + '" background_color="' + e.data.sectionbgcolor101 + '" background_img="' + e.data.sectionbgimage101 + '" parallax="' + e.data.sectionparallax101 + '" gradient="' + e.data.sectiongradient101 + '" margin="' + e.data.sectionmargin101 + '" padding="' + e.data.sectionpadding101 + '"]<br><br>[/wr_section_box]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },										
						
						{

                            text: 'Section Container',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Section Container',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'sclass101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_section_container class="'+ e.data.sclass101 +'"]<br><br>[/wr_section_container]' );
                                        
                                    }

                                });

                            }

                        },						

						{

                            text: '1 Column',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '1 Column',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'cone101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_1_column class="'+ e.data.cone101 +'"]<br><br>[/wr_1_column]' );
                                        
                                    }

                                });

                            }

                        },

						{

                            text: '1/2 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '1/2 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'ctwo101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_1_2_column class="'+ e.data.ctwo101 +'"]<br><br>[/wr_1_2_column]' );
                                        
                                    }

                                });

                            }

                        },	
						
						{

                            text: '1/3 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '1/3 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'cthree101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_1_3_column class="'+ e.data.cthree101 +'"]<br><br>[/wr_1_3_column]' );
                                        
                                    }

                                });

                            }

                        },	

						{

                            text: '1/4 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '1/4 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'cfour101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_1_4_column class="'+ e.data.cfour101 +'"]<br><br>[/wr_1_4_column]' );
                                        
                                    }

                                });

                            }

                        },	

						{

                            text: '1/6 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '1/6 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'csix101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_1_6_column class="'+ e.data.csix101 +'"]<br><br>[/wr_1_6_column]' );
                                        
                                    }

                                });

                            }

                        },	

						{

                            text: '2/3 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '2/3 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'ceight101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_2_3_column class="'+ e.data.ceight101 +'"]<br><br>[/wr_2_3_column]' );
                                        
                                    }

                                });

                            }

                        },	

						{

                            text: '3/4 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '3/4 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'cnine101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_3_4_column class="'+ e.data.cnine101 +'"]<br><br>[/wr_3_4_column]' );
                                        
                                    }

                                });

                            }

                        },		

						{

                            text: '5/6 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '5/6 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'cten101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_5_6_column class="'+ e.data.cten101 +'"]<br><br>[/wr_5_6_column]' );
                                        
                                    }

                                });

                            }

                        },

						{

                            text: '5/12 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '5/12 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'cftw101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_5_12_column class="'+ e.data.cftw101 +'"]<br><br>[/wr_5_12_column]' );
                                        
                                    }

                                });

                            }

                        },						

						{

                            text: '7/12 Columns',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: '7/12 Columns',

                                    body: [

                                     {

                                            type: 'textbox',

                                            name: 'cstw101',

                                            label: 'Section Class',

                                            value: '',

                                        },  										
                                       
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_7_12_column class="'+ e.data.cstw101 +'"]<br><br>[/wr_7_12_column]' );
                                        
                                    }

                                });

                            }

                        },						
						
						]
						},
						
				{
					text:'Content',
							
					menu: [							

						{

                            text: 'Title',


                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Title',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'sectiontlid101',

                                            label: 'Section ID',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'sectiontlclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },											
									
                                        {

                                            type: 'textbox',

                                            name: 'sectiontitle101',

                                            label: 'Section Title',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 45,

                                        },																				
										
										{

                                            type: 'textbox',

                                            name: 'tlmargin101',

                                            label: 'Margin',

                                            value: '0px 0px 20px 0px'

                                        },                                       
 
										{

                                            type: 'textbox',

                                            name: 'tlpadding101',

                                            label: 'Padding',

                                            value: '0px 0px 0px 0px'

                                        },

										{

                                            type: 'textbox',

                                            name: 'tlcolor101',

                                            label: 'Color Code',

                                            value: '#7e8082'

                                        },											

										{

                                            type: 'textbox',

                                            name: 'tlfontsz101',

                                            label: 'Font Size',

                                            value: '24px'

                                        },	

										{

                                            type: 'textbox',

                                            name: 'tlfontwt101',

                                            label: 'Font Weight',

                                            value: 'normal'

                                        },										

										{

                                            type: 'textbox',

                                            name: 'tllineht101',

                                            label: 'Line Height',

                                            value: '22px'

                                        },	

										{

                                            type: 'listbox',

                                            name: 'tlalign101',

                                            label: 'Text Align',

                                            values: [
                                                    { text: 'Left', value: 'left'},
                                                    { text: 'Right', value: 'right' },
													{ text: 'Center', value: 'center' },
													{ text: 'Justify', value: 'justify' },
                                                ]

                                        },	

										{

                                            type: 'listbox',

                                            name: 'tltrnsfrm101',

                                            label: 'Text Transform',

                                            values: [
                                                    { text: 'Uppercase', value: 'uppercase'},
                                                    { text: 'Lowercase', value: 'lowercase' },
													{ text: 'Capitalize', value: 'capitalize' },
													{ text: 'None', value: 'none' },
                                                ]

                                        },										

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_section_title id="' + e.data.sectiontlid101 + '" class="' + e.data.sectiontlclass101 + '" title="' + e.data.sectiontitle101 + '" margin="' + e.data.tlmargin101 + '" padding="' + e.data.tlpadding101 + '" color="' + e.data.tlcolor101 + '" font_size="' + e.data.tlfontsz101 + '" font_weight="' + e.data.tlfontwt101 + '" line_height="' + e.data.tllineht101 + '" text_align="' + e.data.tlalign101 + '" text_transform="' + e.data.tltrnsfrm101 + '"][/wr_section_title]' );
                                        
                                    }

                                });

                            }          
                    
                        },		

						{

                            text: 'Text',


                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Text',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'sectiontxid101',

                                            label: 'Section ID',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'sectiontxclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },											
									
                                        {

                                            type: 'textbox',

                                            name: 'sectiontxt101',

                                            label: 'Section Text',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 90,

                                        },																				
										
										{

                                            type: 'textbox',

                                            name: 'txmargin101',

                                            label: 'Margin',

                                            value: '0px 0px 0px 0px'

                                        },                                       
 
										{

                                            type: 'textbox',

                                            name: 'txpadding101',

                                            label: 'Padding',

                                            value: '0px 0px 10px 0px'

                                        },

										{

                                            type: 'textbox',

                                            name: 'txcolor101',

                                            label: 'Color Code',

                                            value: '#9c9d9f'

                                        },											

										{

                                            type: 'textbox',

                                            name: 'txfontsz101',

                                            label: 'Font Size',

                                            value: '12px'

                                        },	

										{

                                            type: 'textbox',

                                            name: 'txfontwt101',

                                            label: 'Font Weight',

                                            value: 'normal'

                                        },										

										{

                                            type: 'textbox',

                                            name: 'txlineht101',

                                            label: 'Line Height',

                                            value: '18px'

                                        },	

										{

                                            type: 'listbox',

                                            name: 'txalign101',

                                            label: 'Text Align',

                                            values: [
                                                    { text: 'Left', value: 'left'},
                                                    { text: 'Right', value: 'right' },
													{ text: 'Center', value: 'center' },
													{ text: 'Justify', value: 'justify' },
                                                ]

                                        },	

										{

                                            type: 'listbox',

                                            name: 'txtrnsfrm101',

                                            label: 'Text Transform',

                                            values: [
											        { text: 'None', value: 'none' },
                                                    { text: 'Uppercase', value: 'uppercase'},
                                                    { text: 'Lowercase', value: 'lowercase' },
													{ text: 'Capitalize', value: 'capitalize' },
													
                                                ]

                                        },										

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_section_text id="' + e.data.sectiontxid101 + '" class="' + e.data.sectiontxclass101 + '" margin="' + e.data.txmargin101 + '" padding="' + e.data.txpadding101 + '" color="' + e.data.txcolor101 + '" font_size="' + e.data.txfontsz101 + '" font_weight="' + e.data.txfontwt101 + '" line_height="' + e.data.txlineht101 + '" text_align="' + e.data.txalign101 + '" text_transform="' + e.data.txtrnsfrm101 + '"]<br/>' + e.data.sectiontxt101 + '<br/>[/wr_section_text]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },	

						{

                            text: 'Image',


                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Image',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'sectionimgid101',

                                            label: 'Section ID',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'sectionimgclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },											
									
                                        {

                                            type: 'textbox',

                                            name: 'sectionimgurl101',

                                            label: 'Image URL',

                                            value: '',
                                        },

                                        {

                                            type: 'textbox',

                                            name: 'imgwidth101',

                                            label: 'Image Width',

                                            value: '',
                                        },

                                        {

                                            type: 'textbox',

                                            name: 'imgheight101',

                                            label: 'Image Height',

                                            value: '',
                                        },										
										
										{

                                            type: 'textbox',

                                            name: 'imgmargin101',

                                            label: 'Margin',

                                            value: '0px 0px 0px 0px'

                                        },                                       
 
										{

                                            type: 'textbox',

                                            name: 'imgpadding101',

                                            label: 'Padding',

                                            value: '0px 0px 0px 0px'

                                        },	

										{

                                            type: 'listbox',

                                            name: 'imgfloat101',

                                            label: 'Image Float',

                                            values: [
                                                    { text: 'None', value: 'none'},
                                                    { text: 'Left', value: 'left'},
                                                    { text: 'Right', value: 'right' },
                                                ]

                                        },	

										{

                                            type: 'listbox',

                                            name: 'imgposition101',

                                            label: 'Image Position',

                                            values: [
											        { text: 'None', value: 'inherit' },
                                                    { text: 'Absolute', value: 'absolute'},
                                                    { text: 'Relative', value: 'relative' },
													{ text: 'Static', value: 'static' },
													
                                                ]

                                        },	

										{

                                            type: 'textbox',

                                            name: 'imgtop101',

                                            label: 'Top',

                                            value: '0px'

                                        },	

										{

                                            type: 'textbox',

                                            name: 'imgbottom101',

                                            label: 'Bottom',

                                            value: '0px'

                                        },	

										{

                                            type: 'textbox',

                                            name: 'imgright101',

                                            label: 'Right',

                                            value: '0px'

                                        },	

										{

                                            type: 'textbox',

                                            name: 'imgleft101',

                                            label: 'Left',

                                            value: '0px'

                                        },										

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_section_image id="' + e.data.sectionimgid101 + '" class="' + e.data.sectionimgclass101 + '" width="' + e.data.imgwidth101 + '" height="' + e.data.imgheight101 + '" margin="' + e.data.imgmargin101 + '" padding="' + e.data.imgpadding101 + '" float="' + e.data.imgfloat101 + '" position="' + e.data.imgposition101 + '" top="' + e.data.imgtop101 + '" bottom="' + e.data.imgbottom101 + '" right="' + e.data.imgright101 + '" left="' + e.data.imgleft101 + '" img_url="' + e.data.sectionimgurl101 + '"][/wr_section_image]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },							
						
                {

                            text: 'Icon',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Icon',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'icntxclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },

                                        {

                                            type: 'listbox',

                                            name: 'icntxstl101',

                                            label: 'Icon Style',

                                            values: [
                                                    { text: 'Pixeden', value: ''},
                                                    { text: 'Font Awesome', value: 'fa'},
                                                ]

                                        },	
										
                                        {

                                            type: 'textbox',

                                            name: 'icntxname101',

                                            label: 'Icon Name',

                                            value: ''

                                        },										

                                        {

                                            type: 'listbox',

                                            name: 'icntxsz101',

                                            label: 'Icon Size',

                                            values: [
                                                    { text: 'Smaller', value: 'fa-1x'},
                                                    { text: 'Small', value: 'fa-2x'},
                                                    { text: 'Medium', value: 'fa-3x' },
													{ text: 'Large', value: 'fa-4x' },
													{ text: 'Larger', value: 'fa-5x' },
													{ text: 'Extra Large', value: 'fa-6x' },
                                                ]

                                        },											
										
                                        {

                                            type: 'textbox',

                                            name: 'icntxcl101',

                                            label: 'Icon Color',

                                            value: '#7e8082'

                                        },	
										
                                        {

                                            type: 'listbox',

                                            name: 'icntxalign101',

                                            label: 'Icon Position',

                                            values: [
                                                    { text: 'Left', value: 'text-align-left'},
                                                    { text: 'Right', value: 'text-align-right' },
													{ text: 'Center', value: 'text-align-center' },
                                                ]

                                        },	
										
                                        {

                                            type: 'listbox',

                                            name: 'icntxfloat101',

                                            label: 'Icon Float',

                                            values: [
                                                    { text: 'None', value: 'icon-float-none'},
                                                    { text: 'Left', value: 'icon-float-left'},
                                                    { text: 'Right', value: 'icon-float-right'},
                                                ]

                                        },										
										
                                        {

                                            type: 'textbox',

                                            name: 'icntxpad101',

                                            label: 'Icon Padding',

                                            value: 'px px px px'

                                        },										
										
                                        {

                                            type: 'textbox',

                                            name: 'icntxmrg101',

                                            label: 'Icon Margin',

                                            value: '0px 0px 0px 0px'

                                        },
										
                                        {

                                            type: 'listbox',

                                            name: 'icntxbr101',

                                            label: 'Icon Circle Border',

                                            values: [
                                                    { text: 'None', value: ''},
                                                    { text: 'Style 1', value: 'icon-style1' },
                                                    { text: 'Style 2', value: 'icon-style2' }, 
                                                ]

                                        },	

                                        {

                                            type: 'listbox',

                                            name: 'icntxbar101',

                                            label: 'Icon Bar',

                                            values: [
                                                    { text: 'None', value: ''},
                                                    { text: 'Right', value: 'ndabplan' },
                                                ]

                                        },											

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_icon class="' + e.data.icntxclass101 + '" icon_style="' + e.data.icntxstl101 + '" icon_name="' + e.data.icntxname101 + '" icon_size="' + e.data.icntxsz101 + '" icon_color="' + e.data.icntxcl101 + '" icon_position="' + e.data.icntxalign101 + '" icon_float="' + e.data.icntxfloat101 + '" icon_padding="' + e.data.icntxpad101 + '" icon_margin="' + e.data.icntxmrg101 + '" icon_border="' + e.data.icntxbr101 + '" icon_bar="' + e.data.icntxbar101 + '"][/wr_icon]' );
                                        
                                    }
                                });

                            }              
                    
                        },
						
						{

                            text: 'Button',


                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Button',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'sectionbtnclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },											
									
                                        {

                                            type: 'textbox',

                                            name: 'btnname101',

                                            label: 'Button Name',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'btnlinkurl101',

                                            label: 'Button Link URL',

                                            value: '#'

                                        },

										{

                                            type: 'listbox',

                                            name: 'btnlinkopen101',

                                            label: 'Button Link Open',

                                            values: [
                                                    { text: 'Open Link Same Tab', value: 'none'},
                                                    { text: 'Open Link New Tab', value: '_blank' },
                                                ]

                                        },										
										
										{

                                            type: 'textbox',

                                            name: 'btnback101',

                                            label: 'Background Color Code',

                                            value: ''

                                        },	

										{

                                            type: 'textbox',

                                            name: 'btncolor101',

                                            label: 'Text Color Code',

                                            value: '#7b7c80'

                                        },

										{

                                            type: 'textbox',

                                            name: 'btnborder101',

                                            label: 'Button Border',

                                            value: '2px solid #7b7c80'

                                        },	

										{

                                            type: 'textbox',

                                            name: 'btnborderradius101',

                                            label: 'Button Border Radius',

                                            value: '0px'

                                        },											

										{

                                            type: 'textbox',

                                            name: 'btnmargin101',

                                            label: 'Margin',

                                            value: '0px 0px 0px 0px'

                                        },                                       
 
										{

                                            type: 'textbox',

                                            name: 'btnpadding101',

                                            label: 'Padding',

                                            value: '10px 25px'

                                        },										

										{

                                            type: 'textbox',

                                            name: 'btnfontsz101',

                                            label: 'Font Size',

                                            value: '12px'

                                        },	

										{

                                            type: 'textbox',

                                            name: 'btnfontwt101',

                                            label: 'Font Weight',

                                            value: 'bold'

                                        },											
										
										{

                                            type: 'listbox',

                                            name: 'btnfloat101',

                                            label: 'Button Float',

                                            values: [
                                                    { text: 'None', value: 'none'},
                                                    { text: 'Left', value: 'left'},
                                                    { text: 'Right', value: 'right' },
                                                ]

                                        },										
							

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_section_button class="' + e.data.sectionbtnclass101 + '" title="' + e.data.btnname101 + '" link_url="' + e.data.btnlinkurl101 + '" link_target="' + e.data.btnlinkopen101 + '" background="' + e.data.btnback101 + '" color="' + e.data.btncolor101 + '" border="' + e.data.btnborder101 + '" border_radius="' + e.data.btnborderradius101 + '" margin="' + e.data.btnmargin101 + '" padding="' + e.data.btnpadding101 + '" float="' + e.data.btnfloat101 + '" font_size="' + e.data.btnfontsz101 + '" font_weight="' + e.data.btnfontwt101 + '" ][/wr_section_button]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },	

						{

                            text: 'Bar',


                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Bar',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'sectionbarid101',

                                            label: 'Section ID',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'sectionbarclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },																				

                                        {

                                            type: 'textbox',

                                            name: 'barwidth101',

                                            label: 'Section Width',

                                            value: '',
                                        },

                                        {

                                            type: 'textbox',

                                            name: 'barheight101',

                                            label: 'Section Height',

                                            value: '',
                                        },										
										
                                        {

                                            type: 'textbox',

                                            name: 'barcolor101',

                                            label: 'Section Color',

                                            value: '',
                                        },	
										
										{

                                            type: 'textbox',

                                            name: 'barmargin101',

                                            label: 'Section Margin',

                                            value: '0px 0px 0px 0px'

                                        },                                       
 
										{

                                            type: 'textbox',

                                            name: 'barpadding101',

                                            label: 'Section Padding',

                                            value: '0px 0px 0px 0px'

                                        },	

										{

                                            type: 'listbox',

                                            name: 'barfloat101',

                                            label: 'Section Float',

                                            values: [
                                                    { text: 'None', value: 'none'},
                                                    { text: 'Left', value: 'left'},
                                                    { text: 'Right', value: 'right' },
                                                ]

                                        },	

										{

                                            type: 'listbox',

                                            name: 'barposition101',

                                            label: 'Section Position',

                                            values: [
											        { text: 'None', value: 'inherit' },
                                                    { text: 'Absolute', value: 'absolute'},
                                                    { text: 'Relative', value: 'relative' },
													{ text: 'Static', value: 'static' },
													
                                                ]

                                        },	

										{

                                            type: 'textbox',

                                            name: 'barborder101',

                                            label: 'Section Border',

                                            value: ''

                                        },	
										

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_bar id="' + e.data.sectionbarid101 + '" class="' + e.data.sectionbarclass101 + '" width="' + e.data.barwidth101 + '" height="' + e.data.barheight101 + '" color="' + e.data.barcolor101 + '" margin="' + e.data.barmargin101 + '" padding="' + e.data.barpadding101 + '" float="' + e.data.barfloat101 + '" position="' + e.data.barposition101 + '" border="' + e.data.barborder101 + '"][/wr_bar]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },	
						
						
						]
						},						
						

				{
					text:'Blog',
							
					menu: [							

							{

                            text: 'Blog Style 1',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Blog',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'blogclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },

                                        {

                                            type: 'textbox',

                                            name: 'blogtitlename101',

                                            label: 'Section Title Name',

                                            value: ''

                                        },										
										
										{

                                            type: 'textbox',

                                            name: 'blcatname101',

                                            label: 'Blog Category Name(Optional)',

                                            value: ''

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'blshowpost101',

                                            label: 'Set number of post show',

                                            value: '-1'

                                        },
								                                                                                                                  

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_blog class="' + e.data.blogclass101 + '" title="' + e.data.blogtitlename101 + '" categoryname="' + e.data.blcatname101 + '" showpost="' + e.data.blshowpost101 + '" ][/wr_blog]' );
                                        
                                    }

                                });

                            }
							},

							{

                            text: 'Blog Style 2',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Blog',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'blogclass1101',

                                            label: 'Section Class',

                                            value: ''

                                        },

                                        {

                                            type: 'textbox',

                                            name: 'blogtitlename1101',

                                            label: 'Section Title Name',

                                            value: ''

                                        },										
										
										{

                                            type: 'textbox',

                                            name: 'blcatname1101',

                                            label: 'Blog Category Name(Optional)',

                                            value: ''

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'blshowpost1101',

                                            label: 'Set number of post show',

                                            value: '-1'

                                        },
								                                                                                                                  

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_blog_slider class="' + e.data.blogclass1101 + '" title="' + e.data.blogtitlename1101 + '" categoryname="' + e.data.blcatname1101 + '" showpost="' + e.data.blshowpost1101 + '" ][/wr_blog_slider]' );
                                        
                                    }

                                });

                            }
							},							

					]
				},
				

				{
					text:'Portfolio',
							
					menu: [								

						{

                            text: 'Portfolio Filter',                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nades Portfolio Filter',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'pftitle101',

                                            label: 'Section Title Name',

                                            value: ''

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'pfcount101',

                                            label: 'Set Number of Post show',

                                            value: '-1'

                                        },
										
                                        {

                                            type: 'listbox',

                                            name: 'pffilter101',

                                            label: 'Filter Style',

                                            values: [
                                                    { text: 'Style 1', value: ''},
                                                    { text: 'Style 2', value: 'ndportfoliofilter4' },
                                                    { text: 'Style 3', value: 'ndfitlet-border' },
                                                ]

                                        },										
										
										{

                                            type: 'textbox',

                                            name: 'pflinkname101',

                                            label: 'Link Name',

                                            value: ''

                                        },

										{

                                            type: 'textbox',

                                            name: 'pflinkurl101',

                                            label: 'Link URL',

                                            value: ''

                                        },

                                        {

                                            type: 'listbox',

                                            name: 'pflinkshow101',

                                            label: 'Link Icon Show',

                                            values: [
                                                    { text: 'No', value: 'arrow_right-off'},
                                                    { text: 'Yes', value: 'arrow_right' },                                            
                                                
                                                ]

                                        },										
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_portfolio_header title="' + e.data.pftitle101 + '" filter_style="' + e.data.pffilter101 + '" link_name="' + e.data.pflinkname101 + '" link_url="' + e.data.pflinkurl101 + '" link_icon_show="' + e.data.pflinkshow101 + '" ][/wr_portfolio_header][wr_portfolio showpost="' + e.data.pfcount101 + '"][/wr_portfolio]' );
                                        
                                    }

                                });

                            }
							},	
							
							{

                            text: 'Portfolio Slider',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Portfolio Slider',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'prfslclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },

                                        {

                                            type: 'textbox',

                                            name: 'prfsltitlename101',

                                            label: 'Section Title Name',

                                            value: ''

                                        },										
										
										{

                                            type: 'textbox',

                                            name: 'prfslcatname101',

                                            label: 'Portfolio Category Name(Optional)',

                                            value: ''

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'prfslshowpost101',

                                            label: 'Set number of post show',

                                            value: '-1'

                                        },
								                                                                                                                  

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_portfolio_slider class="' + e.data.prfslclass101 + '" title="' + e.data.prfsltitlename101 + '" categoryname="' + e.data.prfslcatname101 + '" showpost="' + e.data.prfslshowpost101 + '" ][/wr_portfolio_slider]' );
                                        
                                    }

                                });

                            }
							},

					]
				},								

						{

                            text: 'Team',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Team Member',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'tmclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },                                        
										{

                                            type: 'textbox',

                                            name: 'tmcatname101',

                                            label: 'Team Category Name(Optional)',

                                            value: ''

                                        }, 

										{

                                            type: 'textbox',

                                            name: 'tmshowpost101',

                                            label: 'Set number of post show',

                                            value: '4'

                                        },										
                                                                              
                                                                                                                   

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_team class="' + e.data.tmclass101 + '" categoryname="' + e.data.tmcatname101 + '"  showpost="' + e.data.tmshowpost101 + '"][/wr_team]' );
                                        
                                    }

                                });

                            }

                        },	
				
				{
					text:'Testimonial ',
							
					menu: [	

                        {

                            text: 'Testimonial Holder',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Testimonial Holder',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'clthldclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'clthldtitle101',

                                            label: 'Section Title',

                                            value: ''

                                        },
										
                                        {

                                            type: 'listbox',

                                            name: 'clthldcntrls101',

                                            label: 'Show Controls',

                                            values: [
                                                    { text: 'No', value: 'ndtestimonials'},
                                                    { text: 'Yes', value: 'testimonials3' },
                                                ]

                                        },										
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_testimonial_holder class="'+ e.data.clthldclass101 +'" title="'+ e.data.clthldtitle101 +'"  show_contorls="'+ e.data.clthldcntrls101 +'"]<br><br>[/wr_testimonial_holder]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },						

                        {

                            text: 'Client Testimonial ',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Client Testimonial',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'cltclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },									

									   {

                                            type: 'textbox',

                                            name: 'clttitle101',

                                            label: 'Client Name',

                                            value: ''

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'cltcompanyl101',

                                            label: 'Company Name',

                                            value: ''

                                        },										
										
										{

                                            type: 'textbox',

                                            name: 'cltcontent101',

                                            label: 'Client Comment',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 90,

                                        },
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_testimonial class="' + e.data.cltclass101 + '" title="' + e.data.clttitle101 + '" company="' + e.data.cltcompanyl101 + '"]' + e.data.cltcontent101 + '[/wr_testimonial]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },	

					]
				},					


				{
					text:'Partner ',
							
					menu: [	

                        {

                            text: 'Partner Holder',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Partner Holder',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'prthldclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },									
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_partner_holder class="'+ e.data.prthldclass101 +'"]<br><br>[/wr_partner_holder]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },						

                        {

                            text: 'Partner Logo ',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Partner Logo',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'prtclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },									

									   {

                                            type: 'textbox',

                                            name: 'prttitle101',

                                            label: 'Partner Name',

                                            value: ''

                                        },
										
									   {

                                            type: 'textbox',

                                            name: 'prtlink101',

                                            label: 'Partner Link',

                                            value: '#'

                                        },										
										
										{

                                            type: 'textbox',

                                            name: 'prtimgl101',

                                            label: 'Partner Logo URL',

                                            value: ''

                                        },										
										
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_partner class="' + e.data.prtclass101 + '" title="' + e.data.prttitle101 + '" partner="' + e.data.prtlink101 + '" img_url="' + e.data.prtimgl101 + '"][/wr_partner]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },	

					]
				},	

				{
					text:'Accordion',
							
					menu: [	

                        {

                            text: 'Accordion Holder',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Accordion Holder',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'acorhldclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },									
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_accordion_holder class="'+ e.data.acorhldclass101 +'"]<br><br>[/wr_accordion_holder]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },						

                        {

                            text: 'Accordion Content',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Accordion Content',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'acorclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },									

									   {

                                            type: 'textbox',

                                            name: 'acortitle101',

                                            label: 'Accordion Title',

                                            value: ''

                                        },
										
									   {

                                            type: 'textbox',

                                            name: 'acorcontent101',

                                            label: 'Accordion Content',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 90,

                                        },										
										
                                        {

                                            type: 'listbox',

                                            name: 'acoractive101',

                                            label: 'Accordion Active',

                                            values: [                                                    
                                                    { text: 'Disable', value: 'deactive' },
													{ text: 'Enable', value: 'active'},
													
                                                ]

                                        },										
										
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_accordion class="' + e.data.acorclass101 + '" title="' + e.data.acortitle101 + '" active="' + e.data.acoractive101 + '"]' + e.data.acorcontent101 + '[/wr_accordion]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },	

					]
				},
						{

                            text: 'Tabs',

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Tabs Shortcode',

                                    body: [
										{

                                            type: 'textbox',

                                            name: 'tabsctl101',

                                            label: 'Section Title',

                                            value: ''

                                        },
																				
										{

                                            type: 'textbox',

                                            name: 'tabtitle101',

                                            label: '1st Tab Title',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'tabcontent101',

                                            label: '1st Tab Content',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 45,

                                        },
										
                                        {

                                            type: 'listbox',

                                            name: 'tabactive101',

                                            label: 'Tab Active',

                                            values: [
                                                    { text: 'Enable', value: 'active'},
                                                    { text: 'Disable', value: 'deactive' },
                                                ]

                                        },										

										{

                                            type: 'textbox',

                                            name: 'tabtitle102',

                                            label: '2nd Tab Title',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'tabcontent102',

                                            label: '2nd Tab Content',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 45,

                                        },									

										{

                                            type: 'textbox',

                                            name: 'tabtitle103',

                                            label: '3rd Tab Title',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'tabcontent103',

                                            label: '3rd Tab Content',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 45,

                                        },	
										
										{

                                            type: 'textbox',

                                            name: 'tabtitle104',

                                            label: '4th Tab Title',

                                            value: ''

                                        },
										{

                                            type: 'textbox',

                                            name: 'tabcontent104',

                                            label: '4th Tab Content',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 45,

                                        },										
										
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent('[wr_tabs title="'+ e.data.tabsctl101 +'"]<br/><br/>[wr_tabs_ul]<br/>[wr_tabs_menu tab_title="'+ e.data.tabtitle101 +'" tab_active="'+ e.data.tabactive101 +'"][/wr_tabs_menu]<br/>[wr_tabs_menu tab_title="'+ e.data.tabtitle102 +'"][/wr_tabs_menu]<br/>[wr_tabs_menu tab_title="'+ e.data.tabtitle103 +'"][/wr_tabs_menu]<br/>[wr_tabs_menu tab_title="'+ e.data.tabtitle104 +'"][/wr_tabs_menu]<br/>[/wr_tabs_ul]<br/><br/>[wr_tabs_content_box]<br/>[wr_tabs_content tab_title="'+ e.data.tabtitle101 +'" tab_active="'+ e.data.tabactive101 +'"]<br/>'+ e.data.tabcontent101 +'<br/>[/wr_tabs_content]<br/>[wr_tabs_content tab_title="'+ e.data.tabtitle102 +'"]<br/>'+ e.data.tabcontent102 +'<br/>[/wr_tabs_content]<br/>[wr_tabs_content tab_title="'+ e.data.tabtitle103 +'"]<br/>'+ e.data.tabcontent103 +'<br/>[/wr_tabs_content]<br/>[wr_tabs_content tab_title="'+ e.data.tabtitle104 +'"]<br/>'+ e.data.tabcontent104 +'<br/>[/wr_tabs_content]<br/>[/wr_tabs_content_box]<br/><br/>[/wr_tabs]');
										
                                    }

                                });

                            }

                        },				
						
                {

                            text: 'Progress Bar',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Progress Bar',

                                    body: [


									   {

                                            type: 'textbox',

                                            name: 'pgrtitle101',

                                            label: 'Title Name',

                                            value: ''

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'pgrcounternum101',

                                            label: 'Counter Digit',

                                            value: ''

                                        },
										
																				
                                                                           

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_progress_bar title="' + e.data.pgrtitle101 + '" counter_num="' + e.data.pgrcounternum101 + '"][/wr_progress_bar]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },	

				{
					text:'Pricing Table',
							
					menu: [	

                        {

                            text: 'Pricing Table Holder',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Pricing Table Holder',

                                    body: [

                                        {

                                            type: 'textbox',

                                            name: 'prchldclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'prctitle101',

                                            label: 'Title',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'prcamount101',

                                            label: 'Amount',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'prctime101',

                                            label: 'Time Period',

                                            value: ''

                                        },	

                                        {

                                            type: 'textbox',

                                            name: 'prcbtntx101',

                                            label: 'Button Text',

                                            value: ''

                                        },

                                        {

                                            type: 'textbox',

                                            name: 'prcbtnln101',

                                            label: 'Button Link',

                                            value: ''

                                        },		

                                        {

                                            type: 'listbox',

                                            name: 'prcactive101',

                                            label: 'Recommended',

                                            values: [                                                    
                                                    { text: 'Disable', value: 'deactive' },
													{ text: 'Enable', value: 'tbl-recommend'},
													
                                                ]

                                        },											
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_pricing_holder class="'+ e.data.prchldclass101 +'" title="'+ e.data.prctitle101 +'" price="'+ e.data.prcamount101 +'" period="'+ e.data.prctime101 +'" button_text="'+ e.data.prcbtntx101 +'" button_link="'+ e.data.prcbtnln101 +'" active="'+ e.data.prcactive101 +'"]<br><br>[/wr_pricing_holder]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },						

                        {

                            text: 'Pricing Table List',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Pricing Table List',

                                    body: [
										
									   {

                                            type: 'textbox',

                                            name: 'prccontent101',

                                            label: 'Table List',

                                            value: '',

                                            multiline: true,

                                            minWidth: 450,

                                            minHeight: 45,

                                        },										
										
                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_pricing]' + e.data.prccontent101 + '[/wr_pricing]' );
                                        
                                    }
                                });

                            }

                                        
                    
                        },	

					]
				},						
									
						{

                            text: 'Social Icon ',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Marvela Social Icon',

                                    body: [
									
                                        {

                                            type: 'textbox',

                                            name: 'socialiconclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },									

                                        {

                                            type: 'listbox',

                                            name: 'socialiconstyle101',

                                            label: 'Social Icon Style',

                                            values: [
                                                    { text: 'Style 1', value: 'social_sharenadea'},
                                                    { text: 'Style 2', value: 'ndsocial-share' },                                            
                                                
                                                ]

                                        },	
										
                                        {

                                            type: 'textbox',

                                            name: 'socialiconcolor101',

                                            label: 'Social Icon Color Code',

                                            value: ''

                                        },										
										

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_social_icon class="' + e.data.socialiconclass101 + '"  style="' + e.data.socialiconstyle101 + '" color="' + e.data.socialiconcolor101 + '"][/wr_social_icon]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },								

							{

                            text: 'Newsletter',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Newsletter',

                                    body: [

										
										{

                                            type: 'textbox',

                                            name: 'nslclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },

										{

                                            type: 'textbox',

                                            name: 'nslpad101',

                                            label: 'Section Padding',

                                            value: '0px 0px 0px 0px'

                                        },										
										{

                                            type: 'textbox',

                                            name: 'nslmrg101',

                                            label: 'Section Margin',

                                            value: '0px 0px 0px 0px'

                                        },                        

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_newsletter class="' + e.data.nslclass101 + '" padding="' + e.data.nslpad101 + '" margin="' + e.data.nslmrg101 + '" ]<br><br>[/wr_newsletter]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },

				{
					text:'Contact',
							
					menu: [	

						{

                            text: 'Contact Info ',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Contact Info',

                                    body: [

										{

                                            type: 'textbox',

                                            name: 'cntinfclass101',

                                            label: 'Section Class',

                                            value: ''

                                        },									
										
										{

                                            type: 'textbox',

                                            name: 'cntinfaddress101',

                                            label: 'Contact Address',

                                            value: '',
											
                                            multiline: true,

                                            minWidth: 350,

                                            minHeight: 50,											

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'cntinfphone101',

                                            label: 'Contact Phone',

                                            value: '',
											
                                            multiline: true,

                                            minWidth: 350,

                                            minHeight: 50,											

                                        },

										{

                                            type: 'textbox',

                                            name: 'cntinfmail101',

                                            label: 'Contact Mail',

                                            value: '',
											
                                            multiline: true,

                                            minWidth: 350,

                                            minHeight: 50,											

                                        },										

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_contact_info class="' + e.data.cntinfclass101 + '" con_phone="' + e.data.cntinfphone101 + '" con_mail="' + e.data.cntinfmail101 + '" ]<br />' + e.data.cntinfaddress101 + '<br />[/wr_contact_info]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },						
							
							{

                            text: 'Contact Form ',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Nadea Contact Form',

                                    body: [

										
										{

                                            type: 'textbox',

                                            name: 'contactfromid101',

                                            label: 'Contact Form ID',

                                            value: ''

                                        },
										                                                                        

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_contact_form contactfromid="' + e.data.contactfromid101 + '" ][/wr_contact_form]' );
                                        
                                    }

                                });

                            }


                        },

					]
				},	
				
						{

                            text: 'Google Map ',

                          

                            onclick: function() {

                                editor.windowManager.open( {

                                    title: 'Marvela Google Map',

                                    body: [

										
										{

                                            type: 'textbox',

                                            name: 'maplink101',

                                            label: 'Map URL',

                                            value: 'http://maps.google.com'

                                        },
										
										{

                                            type: 'textbox',

                                            name: 'mapwidth101',

                                            label: 'Map Width',

                                            value: '100%'

                                        },											
										
										{

                                            type: 'textbox',

                                            name: 'mapheight101',

                                            label: 'Map Height',

                                            value: '375px'

                                        },										
										                                                                        

                                    ],

                                    onsubmit: function( e ) {

                                        editor.insertContent( '[wr_map width="' + e.data.mapwidth101 + '" height="' + e.data.mapheight101 + '"]' + e.data.maplink101 + '[/wr_map]' );
                                        
                                    }

                                });

                            }

                                        
                    
                        },

                        

                       

                        

                     

                     
                    ]


               

        });

    });

})();
