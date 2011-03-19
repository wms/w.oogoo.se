<h1>Stats</h1>
<table>
    <thead>
        <tr>
            <th>Original URL</th>
            <th>Hits</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($urls as $url): ?>
        <tr>
            <td><?= $url->url ?></td>
            <td><?= $url->hits ?></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<p><?= $this->html->link('Go back.', '/') ?></p>
