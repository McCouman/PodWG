####**Wustest du schon?**####
Json auch kurz _JavaScript Object Notation_ ist ein einfaches Format, um Daten und Informationen auszugeben oder zu übertragen. In den alten Tagen des Internets und der Dienste nutzt man XML als das primäre Datenformat für das Übermittlung von Daten. Seit JSON _(JSON-Format in RFC 4627)_, ist es viel leichter geworden, selbst über breite Serverlandschaften hinaus, Daten zu übertragen.


**Video Link**
- <a href="https://www.video2brain.com/de/videos-1656.htm">kostenlose Videos zu Json</a>

<hr />

###Kurze Einleitung###

Json fängt mit an <code>{</code> und wird auch so beendet <code>}</code>. In der Mitte des Geschehens folgen die Angaben.

**Beispiel:**

	{ 
	
	... 
	
	}

Zu beachten gilt, das eine Option immer mit einem "," beendet wird. 

**Beispiel:**

	{ 
		"string1": "value1",
		"string2": "value2",
		...
	}

Das letzte Objekt enthält jedoch kein "," mehr! 

**Beispiel 1:**

<pre>{ <span style="color:#aaa;">
	"string1": <span style="color:#888;">"value1"</span><span style="color:red;"><b>,</b></span>
	"string2": <span style="color:#888;">["value2", "value3", "value4"]</span><span style="color:red;"><b>,</b></span>
	"string3": <span style="color:#888;">"value5"</span> <span style="color:red;">//&lt;- hier darf kein "," angegeben werden!</span>   </span>
}</pre>


**Beispiel 2:**

<pre>{ <span style="color:#aaa;">
	"string1": <span style="color:#888;">"value1"</span><span style="color:red;"><b>,</b></span>
	"string2": <span style="color:#888;">["value2", "value3", "value4"]</span><span style="color:red;"><b>,</b></span>
	"string3": <span style="color:#888;">"value5"</span><span style="color:red;"><b>,</b></span>  
	
	"string4":	{
		"string4_1": <span style="color:#888;">"value4_1"</span><span style="color:red;"><b>,</b></span>
		"string4_2": <span style="color:#888;">"value4_2"</span><span style="color:red;"><b>,</b></span>
		"string4_3": <span style="color:#888;">"value4_3"</span> <span style="color:red;">//&lt;- hier darf kein "," angegeben werden!</span>   
	}<span style="color:red;"><b>,</b></span>  
	
	"string5":	{
		"string5_1": <span style="color:#888;">"value5_1"</span><span style="color:red;"><b>,</b></span>
		"string5_1": <span style="color:#888;">"value5_1"</span><span style="color:red;"><b>,</b></span>
		"string5_1": <span style="color:#888;">"value5_1"</span> <span style="color:red;">//&lt;- hier darf kein "," angegeben werden!</span>   
	}<span style="color:red;">//&lt;- hier darf kein "," angegeben werden!</span>   </span>
}</pre>

###Übersichten der Json Strukturen###

####Arrays:####

<img src="../img/array.gif" />

**Beispiel:**

	{ 
		"array": 	[1, 2, 3],
		"array2": 	["value4", "value5", "value6"]
	}

<br />

####Objekte: (Name)####

<img src="../img/object.gif" />

**Beispiel 1:**

	{
		"object": {
        		"a": "b",
        		"c": "d",
        		"e": "f"
    	}
	}

**Beispiel 2:**

	{
		"object1": { 
			"string1": "value1",
			"string2": "value2"
		},
	
		"object2": { 
			"string2_1": "value2_1",
			"string2_2": "value2_2"
		}
	}
<br />

####Values: (Information)####

<img src="../img/value.gif" />

**Beispiel:**

	{	
		"string": "Hello World",
    	"number": 123,
    	"object": {
        		"a": "b",
        		"c": "d",
        		"e": "f"
    	},
    	"array": [1, 2, 3],
    	"boolean": true,
    	"boolean": false,
   		"null": null
	}