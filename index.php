<?PHP
	include 'search_result.php';
	
	$body 	= "KWIC is an acronym for Key Word In Context, the most common format for concordance lines. The term KWIC was first coined by Hans Peter Luhn.[1] The system was based on a concept called keyword in titles which was first proposed for Manchester libraries in 1864 by Andrea Crestadoro.[2]\nA KWIC index is formed by sorting and aligning the words within an article title to allow each word (except the stop words) in titles to be searchable alphabetically in the index. It was a useful indexing method for technical manuals before computerized full text search became common.\nThe term permuted index is another name for a KWIC index, referring to the fact that it indexes all cyclic permutations of the headings. Books composed of many short sections with their own descriptive headings, most notably collections of manual pages, often ended with a permuted index section, allowing the reader to easily find a section by any word from its heading. This practice is no longer common.";
	$title 	= 'Key Word in Context - Wikipedia, the free encyclopedia';
	$link	= 'http://en.wikipedia.org/wiki/Key_Word_in_Context';
	
	$search	= 'key word context';
	
	$sr 	= new Search_Result($body, $title, $link);
?>

<!DOCTYPE html>
<html>
<head>
		
	<style type="text/css">
		body {
			margin: 32px;
			line-height: 16px;
			font-size: 12px;
			font-family: sans-serif;
		}
		
		ul {
			padding: 0;
			width: 512px;
			list-style-type: none;
		}
		
		p {
			margin-top: 0;
		}
		
		a {
			display: block;
			color: #1022CC;
			text-decoration: none;
		}
		
		li a:first-child {
			text-decoration: underline;
			color: #1022CC;
			font-size: 18px;
		}
		
		li a {
			font-size: 12px;
			color: #009933;
		}
		
		.keyword {
			font-weight: bold;
		}
	</style>
		
	<title>Search Result Demo</title>

</head>
	<body>
		<h1>Demo of Keyword in Context Algorithm</h1>
		<ul>
			<li>
				<a href="<?PHP echo $sr->link; ?>" title="<?PHP echo $sr->title; ?>"><?PHP echo $sr->highlight_search_terms($sr->title, $search); ?></a>
				<a href="<?PHP echo $sr->link; ?>" title="<?PHP echo $sr->link; ?>"><?PHP echo $sr->highlight_search_terms($sr->link, $search); ?></a>
				<p>
					<?PHP echo $sr->excerpt($search, 2, 9); ?>
				</p>
			</li>
		</ul>
		
	</body>
</html>