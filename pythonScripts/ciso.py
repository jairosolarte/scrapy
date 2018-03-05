import scrapy
from scrapy.crawler import CrawlerProcess


class Spider(scrapy.Spider):

    name = "ciso"

    def start_requests(self):
        urls = [


            'https://antropologia.uniandes.edu.co/index.php/profesores',
            'https://c-politica.uniandes.edu.co/index.php/profesores',
            'https://historia.uniandes.edu.co/index.php/profesores',
            'https://filosofia.uniandes.edu.co/index.php/profesores',
            'https://lenguas.uniandes.edu.co/index.php/profesores',
            'https://psicologia.uniandes.edu.co/index.php/profesores',
        ]
        for url in urls:
            yield scrapy.Request(url=url, callback=self.parse)

    def parse(self, response):

        for profesor in response.css('div#scgallery div.boxgrid.captionfull'):
            yield {

                'nombre': profesor.css('div.cover.boxcaption div.teaser-title ::text').extract(),
                'correo': profesor.css('div.teaser-text ::text').re(r'.*@uniandes[^\n\r]*'),
                'ext': profesor.css('div.teaser-text ::text').re(r'(?i)Ext.:\s*\d{1,4}'),
                'oficina': profesor.css('div.teaser-text ::text').re(r'(?i)oficina[^\n\r]*'),
                #'cargo': profesor.css('div.teaser-text ::text').re(r'(?i).*Profes|Coord|Direc.*'),
                'url': response.request.url,



            }



process = CrawlerProcess({
    'USER_AGENT': 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)',
	 'FEED_URI': 'file:///var/www/html/scrapy/json/cienciasSociales.json',
})

process.crawl(Spider)
process.start() # the script will block here until the crawling is finished
