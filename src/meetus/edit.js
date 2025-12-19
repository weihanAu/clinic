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
import { useBlockProps, InspectorControls, RichText } from "@wordpress/block-editor";
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
	const [title1, setBannertitle1] = useState(attributes.title1 || '');
	const [title2, setBannertitle2] = useState(attributes.title2 || '');
	const [imageUrl1, setImageUrl1] = useState(attributes.imageUrl1 || '');
	const [imageUrl2, setImageUrl2] = useState(attributes.imageUrl2 || '');
	const [wysiwygContent, setWysiwygContent] = useState(attributes.wysiwygContent || '');
	const [wysiwygContent1, setWysiwygContent1] = useState(attributes.wysiwygContent1 || '');
	const [wysiwygContent2, setWysiwygContent2] = useState(attributes.wysiwygContent2 || '');
	const [wysiwygContent3, setWysiwygContent3] = useState(attributes.wysiwygContent3 || '');
	const [link1, setBannerlink1] = useState(attributes.link1 || '');
	const [link2, setBannerlink2] = useState(attributes.link2 || '');
	return (
		<>
			<div {...useBlockProps()}>
				<TextControl
					label={__("title1", "copyright-date-block")}
					value={title1}
					onChange={(value) => {
						setAttributes({ title1: value });
						setBannertitle1(value);
					}}
				/>
				<TextControl
					label={__("title2", "copyright-date-block")}
					value={title2}
					onChange={(value) => {
						setAttributes({ title2: value });
						setBannertitle2(value);
					}}
				/>
				<TextControl
					label={__("link1", "copyright-date-block")}
					value={link1}
					onChange={(value) => {
						setAttributes({ link1: value });
						setBannerlink1(value);
					}}
				/>
				<TextControl
					label={__("link2", "copyright-date-block")}
					value={link2}
					onChange={(value) => {
						setAttributes({ link2: value });
						setBannerlink2(value);
					}}
				/>
				<MediaUploadCheck>
					<MediaUpload
						onSelect={(media) => setAttributes({ imageUrl1: media.url })}
						allowedTypes={['image']}
						render={({ open }) => (
							<Button onClick={open} isPrimary>
								{attributes.imageUrl1 ? __('Change Image', 'text-domain') : __('Upload Image', 'text-domain')}
							</Button>
						)}
					/>
				</MediaUploadCheck>
				{attributes.imageUrl1 && <img width={200} height={"auto"} src={attributes.imageUrl1} alt="" />}
				<MediaUploadCheck>
					<MediaUpload
						onSelect={(media) => setAttributes({ imageUrl2: media.url })}
						allowedTypes={['image']}
						render={({ open }) => (
							<Button onClick={open} isPrimary>
								{attributes.imageUrl2 ? __('Change Image', 'text-domain') : __('Upload Image', 'text-domain')}
							</Button>
						)}
					/>
				</MediaUploadCheck>
				
				{attributes.imageUrl2 && <img width={200} height={"auto"} src={attributes.imageUrl2} alt="" />}
				<RichText
					tagName="div"
					style={{border: '1px solid #ccc', minHeight: '100px', padding: '10px'}}
					value={wysiwygContent}
					onChange={(value) => {
						setAttributes({ wysiwygContent: value });
						setWysiwygContent(value);
					}}
					placeholder={__('Enter content for doctor1...', 'text-domain')}
				/>
				<RichText
					tagName="div"
					style={{ border: '1px solid #ccc', minHeight: '100px', padding: '10px' }}
					value={wysiwygContent1}
					onChange={(value) => {
						setAttributes({ wysiwygContent1: value });
						setWysiwygContent1(value);
					}}
					placeholder={__('Enter content for doctor1...', 'text-domain')}
				/>
				<RichText
					tagName="div"
					style={{ border: '1px solid #ccc', minHeight: '100px', padding: '10px' }}
					value={wysiwygContent2}
					onChange={(value) => {
						setAttributes({ wysiwygContent2: value });
						setWysiwygContent2(value);
					}}
					placeholder={__('Enter content for doctor2...', 'text-domain')}
				/>
				<RichText
					tagName="div"
					style={{ border: '1px solid #ccc', minHeight: '100px', padding: '10px' }}
					value={wysiwygContent3}
					onChange={(value) => {
						setAttributes({ wysiwygContent3: value });
						setWysiwygContent3(value);
					}}
					placeholder={__('Enter content for doctor2...', 'text-domain')}
				/>
			</div>
		</>
	);
}