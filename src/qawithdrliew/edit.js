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

	return (
		<>
			<InspectorControls>
				<PanelBody title={__("Settings", "settings for Q & A")}>
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
						label={__("video url", "copyright-date-block")}
						value={video_url}
						onChange={(value) => {
							setAttributes({ video_url: value });
							setBannervideo_url(value);
						}}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...useBlockProps()}>
				<h2>Q & A DR JULIAN LIEW TALKS</h2>
				<p>please enter your customization on the right section</p>
			</div>
		</>
	);
}
