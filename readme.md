This will format a search result similarly to the way Google, Wikipedia and other big players do. i.e.,

	Search string: Key Word Context
	
    Key Word in Context - Wikipedia, the free encyclopedia
    http://en.wikipedia.org/wiki/Key_Word_in_Context
	...KWIC is an acronym for Key Word In Context...word (except the stop words) in titles to be...

Given search terms and the body text of a result it will find segments of text that include the keywords and then output the N highest-density segments surrounded by ellipses.

It will also wrap all keywords in an html marker so that they can be highlighted on screen.

There is almost definitely a better way to do this, but frustratingly no one has published code to do this in a place I could locate. So, here is my version.

If you know of a project that does this better, tell me about it! I will list it here so that others can find it. Otherwise, please help me make this better!