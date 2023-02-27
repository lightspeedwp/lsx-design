/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */

/**
 * Internal dependencies
 */
import metadata from './block.json';

wp.blocks.registerBlockVariation( 'core/query', {
    name: metadata.name,
    title: metadata.title,
    description: metadata.description,
    isActive: ( { namespace, query } ) => {
        return (
            namespace === metadata.name
        );
    },
    attributes: {
        namespace: metadata.name,
        query: {
            perPage: 6,
            pages: 0,
            offset: 0,
            postType: 'post',
            order: 'desc',
            orderBy: 'date',
            author: '',
            search: '',
            exclude: [],
            sticky: '',
            inherit: false,
			related: 1
        },
    },
    scope: [ 'inserter' ],
    }
);
