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

	return (
		<>
			<div {...useBlockProps()}>
				<h2>
					julian liews work
				</h2>
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
				<MediaUploadCheck>
					<MediaUpload
						onSelect={(media) => setAttributes({ imageUrl2: media.url })}
						allowedTypes={['image']}
						render={({ open }) => (
							<Button onClick={open} isPrimary>
								{attributes.imageUrl1 ? __('Change Image', 'text-domain') : __('Upload Image', 'text-domain')}
							</Button>
						)}
					/>
				</MediaUploadCheck>
				<MediaUploadCheck>
					<MediaUpload
						onSelect={(media) => setAttributes({ imageUrl3: media.url })}
						allowedTypes={['image']}
						render={({ open }) => (
							<Button onClick={open} isPrimary>
								{attributes.imageUrl1 ? __('Change Image', 'text-domain') : __('Upload Image', 'text-domain')}
							</Button>
						)}
					/>
				</MediaUploadCheck>
				<MediaUploadCheck>
					<MediaUpload
						onSelect={(media) => setAttributes({ imageUrl4: media.url })}
						allowedTypes={['image']}
						render={({ open }) => (
							<Button onClick={open} isPrimary>
								{attributes.imageUrl1 ? __('Change Image', 'text-domain') : __('Upload Image', 'text-domain')}
							</Button>
						)}
					/>
				</MediaUploadCheck>
				<MediaUploadCheck>
					<MediaUpload
						onSelect={(media) => setAttributes({ imageUrl5: media.url })}
						allowedTypes={['image']}
						render={({ open }) => (
							<Button onClick={open} isPrimary>
								{attributes.imageUrl1 ? __('Change Image', 'text-domain') : __('Upload Image', 'text-domain')}
							</Button>
						)}
					/>
				</MediaUploadCheck>
			</div>
		</>
	);
}
