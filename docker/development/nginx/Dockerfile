FROM nginx:alpine

# Copy custom Nginx config
COPY nginx.conf /etc/nginx/nginx.conf

# Create nginx user with correct permissions
RUN adduser -u 82 -D -S -G www-data www-data
