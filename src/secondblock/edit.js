import { __ } from "@wordpress/i18n";
import {
	useBlockProps,
	InspectorControls,
	MediaUpload,
	MediaUploadCheck,
} from "@wordpress/block-editor";
import {
	PanelBody,
	RangeControl,
	SelectControl,
	Card,
	CardMedia,
} from "@wordpress/components";
import { useSelect } from "@wordpress/data";

export default function Edit({ attributes, setAttributes }) {
	const { postsPerPage, category } = attributes;
	const categories = useSelect((select) => {
		return select("core").getEntityRecords("taxonomy", "category");
	}, []);

	const categoryOptions = categories
		? categories.map((cat) => ({
				label: cat.name,
				value: cat.id,
		  }))
		: [];

	return (
		<div {...useBlockProps()}>
			<InspectorControls>
				<PanelBody title={__("Settings", "my-plugin")}>
					<RangeControl
						label={__("Posts Per Page", "my-plugin")}
						value={postsPerPage}
						onChange={(newPostsPerPage) =>
							setAttributes({ postsPerPage: newPostsPerPage })
						}
						min={1}
						max={10}
					/>
					<SelectControl
						label={__("Select a Category", "my-plugin")}
						value={category}
						options={categoryOptions}
						onChange={(newCategory) => setAttributes({ category: newCategory })}
					/>
				</PanelBody>
			</InspectorControls>
			<p>
				{__("This block will display a paginated list of posts.", "my-plugin")}
			</p>
		</div>
	);
}
