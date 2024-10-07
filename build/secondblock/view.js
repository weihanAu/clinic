/******/ (() => { // webpackBootstrap
/*!*********************************!*\
  !*** ./src/secondblock/view.js ***!
  \*********************************/
/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

/* eslint-disable no-console */
document.addEventListener("DOMContentLoaded", function () {
  const blockWrappers = document.querySelectorAll(".wp-block-hudsonblocks-secondblock");
  blockWrappers.forEach(blockWrapper => {
    const paginationLinks = blockWrapper.querySelectorAll(".pagination a");
    paginationLinks.forEach(link => {
      link.addEventListener("click", function (event) {
        event.preventDefault();
        const page = this.getAttribute("data-page");

        // Fetch new content based on the page number
        fetch(`/wp-json/wp/v2/posts?page=${page}&&per_page=2&&offset=2`, {
          method: "GET",
          headers: {
            "Content-Type": "application/json"
          }
        }).then(response => {
          if (!response.ok) {
            throw new Error("Network response was not ok");
          }
          return response.json(); // Assuming the response is JSON
        }).then(data => {
          // Assuming the data is in HTML format or needs rendering
          // Render the new content (this depends on the structure of your response)
          // For example, you might need to update only specific parts of the content
          blockWrapper.innerHTML = ""; // Clear the old content
          data.forEach(post => {
            // Create and append new content dynamically
            const postElement = document.createElement("div");
            postElement.innerHTML = `<h2>${post.title.rendered}</h2><div>${post.content.rendered}</div>`;
            blockWrapper.appendChild(postElement);
          });
        }).catch(error => {
          console.error("Error fetching posts:", error);
        });
      });
    });
  });
});

/* eslint-enable no-console */
/******/ })()
;
//# sourceMappingURL=view.js.map