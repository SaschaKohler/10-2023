            <tr class="border-b">
                <td class="text-center">{{ $article->qty }}</td>
                <td class="text-left font-semibold">{{ $article->article->short_text}}</td>
                <td class="text-center">{{ $article->unit_price}}</td>
                <td class="text-right">{{ $article->discount}}</td>
                <td class="text-right pr-6">{{ $article->sub_total}}</td>

            </tr>
