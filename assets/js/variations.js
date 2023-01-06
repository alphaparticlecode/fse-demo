wp.domReady( function() {
	/**
     * Customize the default Media & Text block.
     */
    wp.blocks.registerBlockVariation(
        'core/media-text',
        {
        	name: 'ap-media-text',
        	title: 'AP 50/50',
        	attributes: {
        		backgroundColor: 'primary'
        	},
        	isDefault: false,
        	innerBlocks: [
                [
                    'core/heading',
                    {
                        level: 3,
                        placeholder: 'Title goes here...',
                        textColor: 'base',
                    } 
                ],
                [
                    'core/paragraph',
                    {
                        placeholder: 'Description goes here...',
                        textColor: 'base',
                    } 
                ],
                [
                    'core/button',
                    {
                        placeholder: 'Click here!',
                        textColor: 'contrast',
                        width: '50',
                        fontSize: 'medium',
                        className: 'is-style-outline'
                    } 
                ]
            ]
        }
    );
});