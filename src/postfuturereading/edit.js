import { useState, useEffect } from '@wordpress/element';
import { ComboboxControl, Spinner,__experimentalInputControl as InputControl  } from '@wordpress/components';
import apiFetch from '@wordpress/api-fetch';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

export default function Edit({ attributes, setAttributes }) {
    const  post1  = attributes['post1'];

    const [posts, setPosts] = useState([]);
	//post 1
    const [searchTerm, setSearchTerm] = useState('');
    const [isLoading, setIsLoading] = useState(false);
	const [inputvalue1,setSearchInputvalue1]=useState('');
	//post 2

    // Function to fetch posts based on search term
    const fetchPosts = (searchTerm = '') => {
        setIsLoading(true);
        apiFetch({ path: `/wp/v2/posts?search=${encodeURIComponent(searchTerm)}&per_page=100` }).then((fetchedPosts) => {
            const postOptions = fetchedPosts.map((post) => ({
                value: post.id,
                label: post.title.rendered,
            }));
            setPosts(postOptions);
            setIsLoading(false);
        });
    };

    // Fetch initial posts when component loads (without search)
    useEffect(() => {
        fetchPosts();
    }, []);

    return (
        <>
            <div {...useBlockProps()}>
                <h2>future reading</h2>
                <div>
                    {post1
                        ? __('Selected Post: ', 'text-domain') + post1
                        : __('No post selected.', 'text-domain')}
                </div>
				<div>
				 <ComboboxControl
                    label={__('Search for a Post', 'text-domain')}
                    value={'post1'}
                    //onChange={(newPostId) => setAttributes({ selectedPostId: parseInt(newPostId) })}
                    onFilterValueChange={(inputValue) => {
						setSearchInputvalue1(inputValue);
                        fetchPosts(inputValue); // Fetch posts based on search input
                    }}
                    options={posts}
                    isLoading={isLoading}
                 />
                {isLoading && <Spinner />}
				</div>
            </div>
        </>
    );
}