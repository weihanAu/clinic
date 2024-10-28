import { useState, useEffect } from '@wordpress/element';
import { ComboboxControl, Spinner,__experimentalInputControl as InputControl  } from '@wordpress/components';
import apiFetch from '@wordpress/api-fetch';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
    const  post1  = attributes['post1'];
    const  post2  = attributes['post2'];
    const  post3  = attributes['post3'];

    const [posts, setPosts] = useState([]);
	//post 1
	const [inputvalue1,setSearchInputvalue1]=useState('');
	//post 2
	const [inputvalue2,setSearchInputvalue2]=useState('');
    //post 3
	const [inputvalue3,setSearchInputvalue3]=useState('');
    // Function to fetch posts based on search term
    const fetchPosts = (searchTerm = '') => {
        //setIsLoading(true);
        apiFetch({ path: `/wp/v2/posts?search=${encodeURIComponent(searchTerm)}&per_page=100` }).then((fetchedPosts) => {
            const postOptions = fetchedPosts.map((post) => ({
                value: post,
                label: post.title.rendered,
            }));
            setPosts(postOptions);
            //setIsLoading(false);
        });
    };

    // Fetch initial posts when component loads (without search)
    useEffect(() => {
        fetchPosts();
    }, []);

    function debounce(func, timeout = 500){
        let timer;
        return (...args) => {
          clearTimeout(timer);
          timer = setTimeout(() => { func.apply(this, args); }, timeout);
        };
      }
    return (
        <>
            <div {...useBlockProps()}>
                <h2>future reading</h2>
                <div class="post_future_rd1">
                    <div>
                        {post1
                            ? __('Selected Post: ', 'text-domain') + post1.title?.rendered
                            : __('No post selected.', 'text-domain')}
                    </div>
                    <div>
                    <ComboboxControl
                        label={__('Search for a future reading 1', 'text-domain')}
                        value={inputvalue1[0]}
                        onChange={(post) =>{setAttributes({ post1: post })}}
                        onFilterValueChange={debounce((inputValue) => {
                            setSearchInputvalue1(inputValue);
                            fetchPosts(inputValue); // Fetch posts based on search input
                        })}
                        options={posts}
                        isLoading={false}
                    />
                    {/* {isLoading && <Spinner />} */}
                    </div>
                </div>
                 <div class="post_future_rd2">
                    <div>
                        {post1
                            ? __('Selected Post: ', 'text-domain') + post2.title?.rendered
                            : __('No post selected.', 'text-domain')}
                    </div>
                    <div>
                    <ComboboxControl
                        label={__('Search for a future reading 1', 'text-domain')}
                        value={inputvalue2[0]}
                        onChange={(post) =>{setAttributes({ post2 : post })}}
                        onFilterValueChange={debounce((inputValue) => {
                            setSearchInputvalue2(inputValue);
                            fetchPosts(inputValue); // Fetch posts based on search input
                        })}
                        options={posts}
                        isLoading={false}
                    />
                    {/* {isLoading && <Spinner />} */}
                    </div>
                </div>
                 <div class="post_future_rd1">
                    <div>
                        {post1
                            ? __('Selected Post: ', 'text-domain') + post3.title?.rendered
                            : __('No post selected.', 'text-domain')}
                    </div>
                    <div>
                    <ComboboxControl
                        label={__('Search for a future reading 1', 'text-domain')}
                        value={inputvalue3[0]}
                        onChange={(post) =>{setAttributes({ post3: post })}}
                        onFilterValueChange={debounce((inputValue) => {
                            setSearchInputvalue3(inputValue);
                            fetchPosts(inputValue); // Fetch posts based on search input
                        })}
                        options={posts}
                        isLoading={false}
                    />
                    {/* {isLoading && <Spinner />} */}
                    </div>
                </div>
            </div>
        </>
    );
}
