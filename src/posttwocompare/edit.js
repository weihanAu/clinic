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
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
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

	const [imageUrl, setImageUrl] = useState(attributes.bannerImage || '');
    const [imageUrl2, setImageUrl2] = useState(attributes.bannerImage || '');
	return (
		<>
			<InspectorControls>
				<PanelBody title={__("Settings", "go back block on single post page")}>
					<MediaUploadCheck>
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
						<MediaUpload
							onSelect={ ( media ) =>{
								setAttributes({bannerImage2:media.url});
								setImageUrl2(media.url);
							}
							}
							allowedTypes={ 'image' }
							value={ '' }
							render={ ( { open } ) => (
								<Button onClick={ open }><button>Open Media Library</button></Button>
							) }
						/>
					</MediaUploadCheck>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<p>please upload an images for "go back" section
				in the right section</p>
				{imageUrl && (
					<div className="image-preview">
						<img src={imageUrl} alt="Uploaded Image" width={"150px"}/>
						<img src={imageUrl2} alt="Uploaded Image" width={"150px"}/>
					</div>
               )}
			</div>
		</>
	);
}
