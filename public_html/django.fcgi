#!/usr/bin/python3.9
import os, sys
from flup.server.fcgi import WSGIServer

# プロジェクトのパスを追加
sys.path.insert(0, '/home/あなたのユーザー名/web/あなたのドメイン/django')
sys.path.insert(0, '/home/あなたのユーザー名/web/あなたのドメイン/django/myproject')

os.environ['DJANGO_SETTINGS_MODULE'] = 'myproject.settings'

from django.core.wsgi import get_wsgi_application
application = get_wsgi_application()

if __name__ == '__main__':
    WSGIServer(application).run() 