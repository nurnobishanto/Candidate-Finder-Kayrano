<style>
    p, h2, h3 {padding:0px; margin: 0px;}
</style>
@if ($resume)
<table>
    <tr>
        <td width="20%">
            {{candidateThumbForPdf($resume['image'])}}

            <img src="{{ candidateThumbForPdf($resume['image']) }}" height="70" />
        </td>
        <td width="80%">
            <h2>{{ $resume['first_name'].' '.$resume['last_name'] }}</h2>
            <p>
                {{ ($resume['email'] ? $resume['email'] : '') 
                    . ($resume['phone1'] ? ", ".$resume['phone1'] : '')
                    . ($resume['phone2'] ? ", ".$resume['phone2'] : '') }}<br />
                {{ ($resume['address'] ? " ".$resume['address'] : '')
                    . ($resume['city'] ? ", ".$resume['city'] : '')
                    . ($resume['state'] ? ", ".$resume['state'] : '')
                    . ($resume['country'] ? ", ".$resume['country'] : '')
                 }}
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h2>{{ __('message.objective') }}</h2>
            <p>{{ $resume['objective'] }}</p>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h2>{{ __('message.job_experiences') }}</h2>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            @if ($resume['experiences'])
            <div>
                <ul>
                    @foreach ($resume['experiences'] as $experience)
                    <li>
                        <h3>{{ $experience['title'] }} - {{ $experience['company'] }}</h3>
                        <p>({{ timeFormat($experience['from']) }} - {{ timeFormat($experience['to']) }})</p>
                        <p>{{ $experience['description'] }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            @else
            <p>{{ __('message.there_are_no_experiences') }}</p>
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h2>{{ __('message.qualifications') }}</h2>
            @if ($resume['qualifications'])
            <div>
                <ul>
                    @foreach ($resume['qualifications'] as $qualification)
                    <li>
                        <h3>{{ $qualification['title'] }} - {{ $qualification['institution'] }}</h3>
                        <p>({{ timeFormat($qualification['from']) }} - {{ timeFormat($qualification['to']) }})</p>
                        <p>{{ $qualification['marks'] }} Out of {{ $qualification['out_of'] }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            @else
            <p>{{ __('message.there_are_no_qualifications') }}</p>
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h2>{{ __('message.languages') }}</h2>
            @if($resume['languages'])
            <div>
                <ul>
                    @foreach ($resume['languages'] as $language)
                    <li>
                        <h3>{{ $language['title'] }} ({{ $language['proficiency'] }})</h3>
                    </li>
                    @endforeach
                </ul>
            </div>
            @else
            <p>{{ __('message.there_are_no_languages') }}</p>
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h2>{{ __('message.achievements') }}</h2>
            @if($resume['achievements'])
            <div>
                <ul>
                    @foreach ($resume['achievements'] as $achievement)
                    <li>
                        <h3>{{ $achievement['title'] }} ({{ $achievement['type'] }})</h3>
                        @if ($achievement['date'])
                        <p>({{ $achievement['date'] }})</p>
                        @endif
                        @if ($achievement['link'])
                        <p>({{ $achievement['link'] }})</p>
                        @endif
                        <p>{{ $achievement['description'] }}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            @else
            <p>{{ __('message.there_are_no_achievements') }}</p>
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <h2>{{ __('message.references') }}</h2>
            @if ($resume['references'])
            <div>
                <ul>
                    @foreach ($resume['references'] as $reference)
                    <li>
                        <h3>{{ $reference['title'] }} ({{ $reference['relation'] }})</h3>
                        @if ($reference['company'])
                        <p>({{ $reference['company'] }})</p>
                        @endif
                        @if ($reference['phone'])
                        <p>({{ $reference['phone'] }})</p>
                        @endif
                        <p>({{ $reference['email'] }})</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            @else
            <p>{{ __('message.there_are_no_references') }}</p>
            @endif
        </td>
    </tr>
</table>
<hr />
@else
@endif