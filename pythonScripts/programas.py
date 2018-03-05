import scrapy
from scrapy.crawler import CrawlerProcess

class spiderPrograma(scrapy.Spider):
    name = "andes"

    def start_requests(self):
        urls = [

            'https://uniandes.edu.co',
            #'https://antropologia.uniandes.edu.co/index.php/profesores',
                    ]
        for url in urls:
            yield scrapy.Request(url=url, callback=self.parse)

    def parse(self, response):
     
       for href in response.css('header.navbar.navbar-default a::attr(href)').re(r'.*programas.*'):
           yield response.follow(href, self.parse_programa)


    def parse_programa(self, response):
        def extract_with_css(query):
            return response.css(query).extract_first().strip()

        for programa in response.css('li.views-row'):
            yield {

                'nombreDepartamento': programa.css('div.views-field.views-field-title-1 span::text').extract_first(),
                'url': programa.css('div.views-field.views-field-title-1 a::attr(href)').extract_first(),
                'snies': programa.css('div.field-content::text').re(r'.*SNIES.*'),

            }



process = CrawlerProcess({
    'USER_AGENT': 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)',
         'FEED_URI': 'file:///var/www/html/scrapy/json/programas.json',
})

process.crawl(spiderPrograma)
process.start() # the script will block here until the crawling is finished

