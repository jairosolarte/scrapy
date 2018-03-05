import scrapy
from urlparse import urlparse
from scrapy.crawler import CrawlerProcess

class BlogSpider(scrapy.Spider):
    name = 'blogspider'
    start_urls = ['https://egob.uniandes.edu.co/','https://ceper.uniandes.edu.co/','https://administracion.uniandes.edu.co/','https://cider.uniandes.edu.co/','https://arte.uniandes.edu.co/','https://arquitectura.uniandes.edu.co/','https://antropologia.uniandes.edu.co/']
	
    def parse(self, response):
		limit = 5
		#ceper
		for href in response.css('.blog_inicio a::attr(href)').re(r'.*news/.*'):
			yield response.follow(href, self.get_noticia)
		#antropologia
		for href in response.css('.menu.level0 a::attr(href)').re(r'.*noticias.*'):
			yield response.follow(href, self.get_link_noticias)
		#arquitectura
		for href in response.css('#menu-footer-menu a::attr(href)').re(r'.*noticias.*'):
			yield response.follow(href, self.get_link_noticias)
		#arte
		for href in response.css('.esg-center a::attr(href)').re(r'.*noticias/.*')[:limit]:
			yield response.follow(href, self.get_noticia)

		#cider
		for href in response.css('#aspnetForm a::attr(href)').re(r'.*Noticias.aspx.*')[:1]:
			yield response.follow(href, self.get_link_noticias)
		for href in response.css('#aspnetForm a::attr(href)').re(r'.*Eventos.aspx.*')[:1]:
			yield response.follow(href, self.get_link_noticias)

		#egob
   		for href in response.css('.ja-megamenu a::attr(href)').re(r'.*os/me-noticias')[:1]:
			yield response.follow(href, self.get_link_noticias)
		#administracion
		for href in response.css('.body-innerwrapper a::attr(href)').re(r'.*noticias.*')[:1]:
			yield response.follow(href, self.get_link_noticias)
		for href in response.css('.body-innerwrapper a::attr(href)').re(r'.*event.*')[:1]:
			yield response.follow(href, self.get_link_noticias)

    def get_noticia(self, response):
		
		url = urlparse(response.url)
		base = url.scheme+'://'+url.netloc+'/'
		#ceper
		for cnt in response.css('.main_column-larga'):
			yield {'title': cnt.css('a.contentpagetitle ::text').extract_first(),
				   'description':cnt.css('.contentpaneopen h3::text').extract_first(),
				   'imagen':cnt.css('.contentpaneopen img::attr(src)').extract_first(),
			       'tipo':'Noticia', 'fecha': None,
				   'url':response.url,'base': base}
		#antropologia
		for cnt in response.css('#icagenda'):
			yield {'title': cnt.css('h2 ::text').extract_first(),
				   'description':''.join(cnt.css('#detail-desc p::text').extract()),
				   'image':cnt.css('.icinfo img::attr(src)').extract_first(),
				   'fecha':cnt.css('.evttime ::text').extract_first(),
				   'tipo':cnt.css('.details table td::text').extract_first(),	
				   'url':response.url,'base': base }
		#arquitectura
		for cnt in response.css('#main article'):
			yield {'title': cnt.css('h1 ::text').extract_first(),
				   'description':''.join(cnt.css('p::text').extract()),
				   'image':cnt.css('img::attr(src)').extract_first(),
				   'fecha':cnt.css('.time ::text').extract_first(),
				   'tipo':None,	
				   'url':response.url,'base': base }
		#arte
		for cnt in response.css('.x-main.left'):
			yield {'title': cnt.css('h1.entry-title ::text').extract_first(),
				   'description':''.join(cnt.css('.content p::text').extract()),
				   'image':cnt.css('.entry-thumb img::attr(src)').extract_first(),
				   'fecha':cnt.css('.infocursoL ::text').extract_first(),
				   'tipo':None,	
				   'url':response.url,'base': base }
		#cider
		for cnt in response.css('#aspnetForm'):
			yield {'title': cnt.css('#titulo::text').extract_first(),
				   'description':''.join(cnt.css('#CuerpoEvento p::text').extract()),
				   'image':None,
				   'fecha':cnt.css('.detail-date p::text').extract_first(),
				   'tipo':cnt.css('.menu-inter h2::text').extract_first(),
				   'url':response.url,'base': base }
		
		#egob
		for cnt in response.css('#ja-wrapper'):
			yield {'title': cnt.css('.item-page .contentheading::text').extract_first(),
				   'description':''.join(cnt.css('.item-page p::text').extract()),
				   'image':None,
				   'fecha':None,
				   'tipo':'noticias',
				   'url':response.url,'base': base }
		#administracion
		for cnt in response.css('#k2Container'):
			yield {'title': cnt.css('.itemTitle::text').extract_first(),
				   'description':''.join(cnt.css('.itemFullText p::text').extract()),
				   'image':cnt.css('.itemImage img::attr(src)').extract_first(),
				   'fecha':cnt.css('.itemDateCreated p::text').extract_first(),
				   'tipo':'noticias',
				   'url':response.url,'base': base }
		for cnt in response.css('.event-detail'):
			yield {'title': cnt.css('.event-detail-header h2::text').extract_first(),
				   'description':''.join(cnt.css('.event-detail-description p::text').extract()),
				   'image':cnt.css('.event-detail-description img::attr(src)').extract_first(),
				   'fecha':''.join(cnt.css('.event-detail-date div::text').extract()),
				   'tipo':'evento',
				   'url':response.url,'base': base }


    def get_link_noticias(self, response):
		limit= 5
		#antropologia
		for href in response.css('#icagenda .event a::attr(href)').extract():
			yield response.follow(href, self.get_noticia)
		#arquitectura
		for href in response.css('#main article h2 a::attr(href)').extract():
			yield response.follow(href, self.get_noticia)

		#cider
		for href in response.css('#DeltaPlaceHolderMain a.noticia-info::attr(href)').extract():
			yield response.follow(href, self.get_noticia)
		for href in response.css('#DeltaPlaceHolderMain a.event-img::attr(href)').extract()[:3]:
			yield response.follow(href, self.get_noticia) 
		#egob
		for href in response.css('#ja-wrapper a.readmore-link::attr(href)').extract()[:5]:
			yield response.follow(href, self.get_noticia)
		#administracion
		for href in response.css('#sp-main-body .catItemTitle a::attr(href)').extract()[:5]:
			yield response.follow(href, self.get_noticia)
		for href in response.css('#jevents a.ev_link_row::attr(href)').extract()[:3]:
			yield response.follow(href, self.get_noticia) 



process = CrawlerProcess({
    'USER_AGENT': 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)',
         'FEED_URI': 'file:///var/www/html/scrapy/json/noticias.json',
})


process.crawl(BlogSpider)
process.start() # the script will block here until the crawling is finished

