import feedparser
import json

sitios = ['http://www.france24.com/es/eco-tecno/rss', 
	'http://www.france24.com/es/deportes/rss',
	'http://www.france24.com/es/noticias/rss',
	'http://cnnespanol.cnn.com/feed/',
	'http://feeds.bbci.co.uk/mundo/rss.xml']

titulos = []
links = []
fechas = []

#Feedparser ya tiene toda la logica para la identificacion de las etiquetas.
for i in range(len(sitios)):
	#obtengo el feed por cada site
	d = feedparser.parse(sitios[i])
	#Encabezado del xml
	print d.feed.title
	print d.feed.link
	print d.feed.description
	print 'Hay ', len(d.entries), ' entradas en este feed'
	
	#Informacion de la entradas o items
	
	for j in range(len(d.entries)):
		titulos.append(d.entries[j].title)
		links.append(d.entries[j].link)
#		print d.entries[j].description
		fechas.append(d.entries[j].published)

todo = []
for i in range(len(titulos)):
	todo.append(titulos[i] + '|' + links[i] + '|' + fechas[i])









print 'En total hay ', len(todo), ' noticias.'

# Generar json
data = {}
data['noticia'] = []
for i in range(len(todo)):
	data['noticia'].append({
		'titular' : titulos[i],
		'link' : links[i],
		'fecha' : fechas[i]
	})
with open('/var/www/html/scrapy/json/noticias_rss.json', 'w') as outfile:
	json.dump(data,outfile)

