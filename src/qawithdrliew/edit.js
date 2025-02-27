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
import { MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';

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

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	 const [bannerTitle,setBannerTitle] = useState(attributes.bannerTitle || '');
	 const [smallTitle,setBannersmallTitle] = useState(attributes.smallTitle || '');
	 const [paragraph,setBannerparagraph] = useState(attributes.paragraph || '');
	 const [video_url,setBannervideo_url] = useState(attributes.video_url || '');
	 const [hrf,setHrf] = useState(attributes.hrf || '');

	return (
		<>
			<div {...useBlockProps()}>
				   <TextControl
						label={__("Title", "copyright-date-block")}
						value={bannerTitle}
						onChange={(value) => {
							setAttributes({ bannerTitle: value });
							setBannerTitle(value);
						}}
					/>
					<TextControl
						label={__("smallTitle", "copyright-date-block")}
						value={smallTitle}
						onChange={(value) => {
							setAttributes({ smallTitle: value });
							setBannersmallTitle(value);
						}}
					/>
					<TextControl
						label={__("paragraph", "copyright-date-block")}
						value={paragraph}
						onChange={(value) => {
							setAttributes({ paragraph: value });
							setBannerparagraph(value);
						}}
					/>
						<TextControl
							label={__("more about url", "copyright-date-block")}
							value={hrf}
							onChange={(value) => {
								setAttributes({ hrf: value });
								setHrf(value);
							}}
						/>
					{/* <MediaUploadCheck>
						<div>please select video</div>
						<video width="320" height="240" controls>
							  <source src={video_url} type="video/mp4" />
						</video>
						<MediaUpload
							onSelect={ ( media ) =>
							{	setBannervideo_url(media.url);
								setAttributes({ video_url: media.url });
							}
							}
								value={ video_url }
								render={ ( { open } ) => (
									<button onClick={ open }>Open Media Library</button>
								) }
							/>
					</MediaUploadCheck> */}
					<TextControl
							label={__("enter presto video id", "copyright-date-block")}
							value={video_url}
							onChange={(value) => {
								setAttributes({ video_url: value });
								setBannervideo_url(value);
							}}
						/>
			</div>
		</>
	);
}
