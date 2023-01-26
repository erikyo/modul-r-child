const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );
const path = require( 'path' );

const config = {
  ...defaultConfig
}

const addModule = ( fileName, filePath ) => {
	return {
		...config,
		name: fileName,
		entry: {
      [fileName]: path.resolve( __dirname, "assets/src/" + filePath + fileName ),
    },
		output: {
			path: path.resolve( __dirname, "assets/dist/" + filePath ),
			filename: fileName,
		},
	};
};

/** js scripts */
const childScripts = addModule( 'child-scripts.js', 'scripts/' );

/** scss styles */
const atf = addModule( 'atf', 'styles/' );
const editor = addModule( 'editor', 'styles/' );
const style = addModule( 'main', 'styles/' );

module.exports = [
	childScripts,
	atf,
	editor,
	style
];
