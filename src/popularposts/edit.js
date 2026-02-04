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
import { useSelect } from '@wordpress/data';
import { SelectControl, Placeholder, Spinner } from '@wordpress/components';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const selectedCategory = attributes.selectedCategory;
	const [filter,setFilter] = useState(attributes.filter);
	//fetch categories from wp rest api
	const categories = useSelect((select) => {
		return select('core').getEntityRecords('taxonomy', 'category', { per_page: -1 });
	}, []);	
	const options = [
		{ label: __('Select a Category', 'text-domain'), value: '' }
	];
	if (categories) {
		categories.forEach((cat) => {
			options.push({
				label: cat.name,
				value: cat.id.toString(), // SelectControl expects strings for values usually
			});
		});
	}
	console.log('categories', options);

	return (
		<>
		
			<div {...useBlockProps()}>
				<h2>
					popular posts
				</h2>
						<SelectControl
							label={__('Filter by Category', 'text-domain')}
							value={selectedCategory}
							options={options}
							onChange={(value) => setAttributes({ selectedCategory: value })}
							__nextHasNoMarginBottom
						/>

				{/* Preview in editor */}
				<p>
					{selectedCategory
						? `Selected Category ID: ${selectedCategory}`
						: 'No category selected.'}
				</p>
			</div>
		</>
	);
}
