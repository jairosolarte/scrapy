import scrapy
from scrapy.crawler import CrawlerProcess


class SpiderDepartamentos(scrapy.Spider):

    name = "depa"

    def start_requests(self):
        urls = [

            'https://uniandes.edu.co',
                    ]
        for url in urls:
            yield scrapy.Request(url=url, callback=self.parse)

    def parse(self, response):
      for href in response.css('header.navbar.navbar-default a::attr(href)').re(r'.*departamentos.*'):
           yield response.follow(href, self.parse_departamentos)


    def parse_departamentos(self, response):
        def extract_with_css(query):
            return response.css(query).extract_first().strip()

        for departamento in response.css('li.views-row'):
            yield {

                'nombreDepartamento': departamento.css('div.views-field.views-field-title-1 span::text').extract_first(),
                'url': departamento.css('div.views-field.views-field-title-1 a::attr(href)').extract_first(),
                }



    def parse_author(self, response):
        def extract_with_css(query):
            return response.css(query).extract_first().strip()
        yield {
            'nombreProfesor': extract_with_css('title::text'),
        }


process = CrawlerProcess({
    'USER_AGENT': 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)',
         'FEED_URI': 'file:///var/www/html/scrapy/json/Departamentos.json',
})

process.crawl(SpiderDepartamentos)
process.start() # the script will block here until the crawling is finished

