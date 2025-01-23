from PIL import Image, ImageDraw

# 100x100のデフォルトアバター画像を作成
size = 100
image = Image.new('RGB', (size, size), color='lightgray')
draw = ImageDraw.Draw(image)

# 円を描画
draw.ellipse([5, 5, size-5, size-5], fill='white')

# 画像を保存
image.save('media/avatars/default.png') 