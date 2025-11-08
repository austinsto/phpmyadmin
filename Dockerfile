FROM phpmyadmin:latest
ENV PMA_ARBITRARY=1
EXPOSE 8080
CMD ["apache2-foreground"]
