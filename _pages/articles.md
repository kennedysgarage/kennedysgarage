---
layout: default
permalink: /articles/
title: Articles
---

<ul id="article-list">

  {% for post in site.posts %}
  <li>
    <div class="row">
      <a href="{{ post.url }}">

      <div class="col-3">
        <p class="byline">{{ post.date | date: "%b %d %Y" }}</p>
      </div><!--/col-->

      {% if post.image %}

      <div class="col-6">
        <h2>{{ post.title }}</h2>
      </div><!--/col-->

      <div class="col-3">
          <!-- <img src="{ post.image } "/> -->
      </div><!--/col-->

      {% else %}

        <div class="col-9">
          <h2>{{ post.title }}</h2>
        </div><!--/col-->

      {% endif %}

      </a>
    </div><!--/row-->
  </li>
  {% endfor %}

</ul>
