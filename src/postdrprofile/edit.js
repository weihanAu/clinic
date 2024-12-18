/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText } from "@wordpress/block-editor";
import { useState } from '@wordpress/element';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * custom import
 */
import { PanelBody, TextControl, FormFileUpload } from "@wordpress/components";
import { Button } from '@wordpress/components';
import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {

	const [imageUrl, setImageUrl] = useState(attributes["bannerImage"] || '');
	const {content,setContent} = useState(attributes["content"]);
	const [title,setTitle] = useState(attributes.title || '');

	return (
		<>
			<div {...useBlockProps()}>
				<h2>Dr Profile</h2>
			<MediaUploadCheck>
				<TextControl
					label={__("Title", "copyright-date-block")}
					value={title}
					onChange={(value) => {
						setAttributes({ title: value });
						setTitle(value);
					}}
				/>
				<MediaUpload
					onSelect={ ( media ) =>{
						setAttributes({bannerImage:media.url});
						setImageUrl(media.url);
					}
					}
					allowedTypes={ 'image' }
					value={ '' }
					render={ ( { open } ) => (
						<Button onClick={ open }><button>Open Media Library</button></Button>
					) }
				/>
				</MediaUploadCheck>
				<span class="color:red">image size:  3:4</span>
				<RichText
					tagName="p" // The tag here is the element output and editable in the admin
					value={ attributes["content"]  } // Any existing content, either from the database or an attribute default
					allowedFormats={ [ 'core/bold', 'core/italic' ] } // Allow the content to be made bold or italic, but do not allow other formatting options
					onChange={ ( content ) => {setAttributes({content:content}) }} // Store updated content as a block attribute
					placeholder={ __( 'intro...' ) } // Display this text before any content has been added by the user
            	/>
			</div>
		</>
	);
}
